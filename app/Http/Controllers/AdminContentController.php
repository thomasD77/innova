<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class AdminContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $content = new Content();
        $content->title = $request->title;
        $content->subtitle = $request->subtitle;
        $content->text = $request->text;
        $content->second_text = $request->second_text;
        $content->number = $request->number;
        $content->extra = $request->extra;
        $content->parent_id = $request->parent_id;
        $content->save();

        if($file = $request->file('photo'))
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/content', $name);

            if ($request->pictWidth && $request->pictHeight != null)
            {
                $path = 'images/content/' . $name;
                $image = Image::make($path);
                $image->resize($request->pictWidth, $request->pictHeight);
                $image->save('images/content/' . $name);

                $content->file = $name;
                $content->WxH = $request->pictWidth . 'x' . $request->pictHeight;
                $content->update();
            }
            else
            {
                $content->file = $name;
                $content->update();
            }
        }

        return redirect()->back();
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
        $content = Content::findOrFail($id);

        $content->title = $request->title;
        $content->subtitle = $request->subtitle;
        $content->text = $request->text;
        $content->second_text = $request->second_text;
        $content->number = $request->number;
        $content->extra = $request->extra;
        $content->parent_id = $request->parent_id;
        $content->update();


        if($file = $request->file('photo'))
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/content', $name);

            if ($request->pictWidth && $request->pictHeight != null)
            {
                $path = 'images/content/' . $name;
                $image = Image::make($path);
                $image->resize($request->pictWidth, $request->pictHeight);
                $image->save('images/content/' . $name);

                $content->file = $name;
                $content->WxH = $request->pictWidth . 'x' . $request->pictHeight;
                $content->update();
            }
            else
            {
                $content->file = $name;
                $content->WxH = null;
                $content->update();
            }
        }

        return redirect()->back();
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
        $content = Content::findOrFail($id);
        $content->delete();

        return redirect()->back();
    }
}
