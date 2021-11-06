<?php

namespace App\Http\Controllers;

use App\Models\CompanyCredential;
use App\Models\Cookie;
use App\Models\disclaimer;
use App\Models\Post;
use App\Models\Privacy;
use Illuminate\Http\Request;

class SystemPagesController extends Controller
{
    //
    public function index($page)
    {

        if($page == 'disclaimer')
        {
            $data = disclaimer::first();
        }
        elseif ($page == 'privacy')
        {
            $data = Privacy::first();
        }
        elseif ($page == 'cookie')
        {
            $data = Cookie::first();
        }

        $company = CompanyCredential::first();

        $posts = Post::query()
            ->with(['photos', 'postcategory'])
            ->where('archived', 0)
            ->where('book' ,'!=', 0)
            ->where('book' ,'<', now()->addHour()->format('Y-m-d\TH:i'))
            ->latest()
            ->take(4)
            ->get();

        return view('front.system', compact('data','company', 'posts'));
    }



}
