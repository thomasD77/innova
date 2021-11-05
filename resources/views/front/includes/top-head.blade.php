<!DOCTYPE html>
<html lang="en-US" class="background-100-e">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @php
        $company = \App\Models\CompanyCredential::find(1)
    @endphp
    <title>{{ $company->companyName }}</title>
    <meta name="description" content="Onepage Parallax Site" />
    <meta name="keywords" content="onepage, parallax" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('front/theme-luiza/bower_components/fontawesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/bower_components/animate.css/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/bower_components/minicolors/jquery.minicolors.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/bower_components/slick.js/slick/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/bower_components/slick.js/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/bootstrap/dist/css/bootstrap-custom.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/lib/linecons/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/styles/style.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/theme-luiza/theme-custom.css')}}"/>
    <link rel="shortcut icon" href="{{asset('front/theme-luiza/favicon.ico')}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{asset('front/theme-luiza/apple-touch-icon.png')}}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('front/theme-luiza/apple-touch-icon-57x57.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front/theme-luiza/apple-touch-icon-72x72.png')}}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/theme-luiza/apple-touch-icon-76x76.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front/theme-luiza/apple-touch-icon-114x114.png')}}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('front/theme-luiza/apple-touch-icon-120x120.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front/theme-luiza/apple-touch-icon-144x144.png')}}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('front/theme-luiza/apple-touch-icon-152x152.png')}}"/>
</head>
