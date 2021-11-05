<?php

namespace App\Http\Controllers;

use App\Models\CompanyCredential;
use App\Models\Content;
use App\Models\HomePage;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;
use Brian2694\Toastr\Facades\Toastr;

class HomePageController extends Controller
{
    public $homeCount = 40;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $credential = HomePage::latest()->first();
        $photos = Photo::where('home_page_id', $credential->id)->get();
        $contents = Content::all();
        return view('admin.pages.home', compact('credential', 'photos', 'contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $creditential = HomePage::findOrFail($id);

        for ($i = 1; $i <= $this->homeCount; $i++ ){
            $input = 'input_' . $i;
            $creditential->$input = $request->$input;
            $creditential->update();
        }


        for ($i = 1; $i <= $this->homeCount; $i++ ){
            $text = 'text_' . $i;
            $creditential->$text = $request->$text;
            $creditential->update();
        }

        $photos = Photo::where('home_page_id', $creditential->id)
            ->get();

        if($photos->isEmpty())                                                      //When we don't have any files we make them
        {
            for ($i = 1; $i <= $this->homeCount; $i++ )
            {
                if ($file = $request->file('photo_' . $i))
                {
                    $name = time() . $file->getClientOriginalName();
                    $file->move('images/form_credentials', $name);
//                    $path = 'images/form_credentials/' . $name;
//                    $image = Image::make($path);
//                    $image->resize(250, 250);
//                    $image->save('images/form_credentials/' . $name);
                    Photo::create(['file' => $name, 'home_page_id' => $creditential->id]);
                }
                elseif ($file = $request->file('photo_' . $i) == null)
                {
                    Photo::create(['file' => 'http://placehold.it/62x62', 'home_page_id' => $creditential->id]);
                }
            }
        }
        else
        {
            for ($i = 1; $i <= $this->homeCount; $i++)
            {
                if ($file = $request->file('photo_' . $i))
                {
                    $name = time() . $file->getClientOriginalName();
                    $file->move('images/form_credentials', $name);
//                    $path = 'images/form_credentials/' . $name;
//                    $image = Image::make($path);
//                    $image->resize(250, 250);
//                    $image->save('images/form_credentials/' . $name);

                    $photo = Photo::findOrFail($i);
//                        $photo = (['file' => $name, 'home_page_id' => $creditential->id, 'id' => $i]);
                    $photo->file = $name;
                    $photo->home_page_id = $creditential->id;
                    $photo->update();
                }
            }
        }

        Session::flash('flash_message', 'Your Home Page Builder is Updated');


        return redirect('/admin');
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
