<?php

namespace App\Http\Controllers;

use App\Models\CompanyCredential;
use App\Models\Content;
use App\Models\HomePage;
use App\Models\Photo;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

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
        $data = HomePage::latest()->first();
        $photos = Photo::where('home_page_id', $data->id)->get();
        $contents = Content::all();
        $company = CompanyCredential::first();
        $posts = Post::latest()->take(4)->get();
        return view('front.front', compact('data', 'photos', 'contents', 'company', 'posts'));
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
            ->latest()
            ->paginate(4);

        $postcategories = PostCategory::latest()->take(30)->get();
        $recentposts = Post::latest()->take(30)->get();

        $company = CompanyCredential::first();
        return view('front.blog', compact('company', 'posts', 'postcategories', 'recentposts'));
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

        $postcategories = PostCategory::latest()->take(30)->get();
        $recentposts = Post::latest()->take(30)->get();

        $company = CompanyCredential::first();
        $posts = Post::latest()->take(4)->get();

        return view('front.post', compact('post', 'postcategories', 'recentposts', 'company', 'posts'));
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
