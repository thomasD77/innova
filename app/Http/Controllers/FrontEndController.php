<?php

namespace App\Http\Controllers;

use App\Models\AccountSettings;
use App\Models\CompanyCredential;
use App\Models\Content;
use App\Models\HomePage;
use App\Models\Photo;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = HomePage::query()
            ->latest()
            ->first();

        $photos = Photo::query()
            ->where('home_page_id', $data->id)
            ->get();

        $contents = Content::all();

        $company = CompanyCredential::first();
        $account = AccountSettings::first()->SEO;

        $posts = Post::query()
            ->with(['photos', 'postcategory'])
            ->where('archived', 0)
            ->where('book' ,'!=', 0)
            ->where('book' ,'<', now()->addHour()->format('Y-m-d\TH:i'))
            ->latest()
            ->take(4)
            ->get();

        return view('front.front', compact('data', 'photos', 'contents', 'company', 'posts', 'account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        //
        $posts = Post::query()
            ->with(['photos', 'postcategory'])
            ->where('archived', 0)
            ->where('book' ,'!=', 0)
            ->where('book' ,'<', now()->addHour()->format('Y-m-d\TH:i'))
            ->latest()
            ->paginate(4);

        $postcategories = PostCategory::query()
            ->latest()
            ->take(30)
            ->get();

        $recentposts = Post::query()
            ->latest()
            ->take(30)
            ->get();

        $company = CompanyCredential::first();
        $account = AccountSettings::first()->SEO;

        return view('front.blog', compact('company', 'posts', 'postcategories', 'recentposts', 'account'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($slug)
    {
        //
        $post = Post::where('slug', $slug)->first();

        $postcategories = PostCategory::query()
            ->latest()
            ->take(30)
            ->get();

        $recentposts = Post::query()
            ->latest()
            ->take(30)
            ->get();

        $company = CompanyCredential::first();

        $account = AccountSettings::first()->SEO;

        $posts = Post::query()
            ->with(['photos', 'postcategory'])
            ->where('archived', 0)
            ->where('book' ,'!=', 0)
            ->where('book' ,'<', now()->addHour()->format('Y-m-d\TH:i'))
            ->latest()
            ->take(4)
            ->get();

        return view('front.post', compact('post', 'postcategories', 'recentposts', 'company', 'posts', 'account'));
    }

    public function contact()
    {
        //
        $data = HomePage::query()
            ->latest()
            ->first();

        $posts = Post::query()
            ->with(['photos', 'postcategory'])
            ->where('archived', 0)
            ->where('book' ,'!=', 0)
            ->where('book' ,'<', now()->addHour()->format('Y-m-d\TH:i'))
            ->latest()
            ->paginate(4);

        $company = CompanyCredential::first();
        $account = AccountSettings::first()->SEO;

        return view('front.contact', compact('company', 'posts', 'data', 'account'));
    }

    public function bedankt()
    {
        $company = CompanyCredential::first();
        $account = AccountSettings::first()->SEO;

        $posts = Post::query()
            ->with(['photos', 'postcategory'])
            ->where('archived', 0)
            ->where('book' ,'!=', 0)
            ->where('book' ,'<', now()->addHour()->format('Y-m-d\TH:i'))
            ->latest()
            ->take(4)
            ->get();

        return view('front.bedankt', compact('company', 'posts', 'account'));
    }

    public function vCard() {
        // define vcard
        $vcard = new VCard();

        // define variables
        $lastname = 'Webcreations';
        $firstname = 'Innova';
        $additional = '';
        $prefix = '';
        $suffix = '';

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
        $vcard->addCompany('Thomas Demeulenaere');
        $vcard->addJobtitle('Software bedrijf');
        //$vcard->addRole('Founder');
        $vcard->addEmail('info@innova-webcreations.be');
        $vcard->addPhoneNumber('+32474413669', );
        $vcard->addAddress(null, null, 'Roeselaarsestraat', 'Izegem', 'W-VL', '8870', 'Belgium');
        $vcard->addURL('https://www.info@innova-webcreations.be');
        $vcard->addPhoto(asset('images/form_credentials/innova-logo.png'));
        $vcard->addNote('Innova ontwerpt en ontwikkelt innovatieve websites met oog voor design en de nadruk op gebruiksvriendelijkheid. Je toekomstige website is niet enkel mooi, maar adresseert bestaande en potentiële klanten recht naar jouw doel.');


        // return vcard as a download
        return $vcard->download();

    }

    public function nfcInformation() {
        // define vcard
        $vcard = new VCard();

        $credential = CompanyCredential::latest()->first();

        // define variables
        $lastname = 'Webcreations';
        $firstname = 'Innova';
        $additional = '';
        $prefix = '';
        $suffix = '';

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
        $vcard->addCompany($credential->firstname . " " . $credential->lastname);
        $vcard->addJobtitle('Software bedrijf');
        //$vcard->addRole('Founder');
        $vcard->addEmail($credential->email);
        $vcard->addPhoneNumber($credential->mobile );
        $vcard->addAddress(null, null, $credential->address . " " . $credential->zip . " " . $credential->city);
        $vcard->addURL($credential->url);
        $vcard->addPhoto(asset('images/form_credentials/innova-logo.png'));
        $vcard->addNote('Innova ontwerpt en ontwikkelt innovatieve websites met oog voor design en de nadruk op gebruiksvriendelijkheid. Je toekomstige website is niet enkel mooi, maar adresseert bestaande en potentiële klanten recht naar jouw doel.');


        // return vcard as a download
        return $vcard->download();

    }

    public function nfcCard()
    {
        $credential = CompanyCredential::latest()->first();
        $photos = Photo::all();
        return view('front.nfc', compact('credential', 'photos'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
