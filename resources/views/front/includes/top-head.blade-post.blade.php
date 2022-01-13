<!DOCTYPE html>
<html lang="en-US" class="background-100-e">
<head>
    <!-- Google Analytics -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-EBB030QMRB');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PVMBBF7');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @php
        $company = \App\Models\CompanyCredential::find(1)
    @endphp
    <title>{{ $company->companyName }}</title>
    <meta name="description" content="Innova website" />
    <meta name="keywords" content="Innova OnePage Website" />
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
    <link rel="shortcut icon" href="{{asset('front/theme-luiza/images/placeholders/logo.png')}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{asset('front/theme-luiza/logo_fav.png')}}"/>
{{--    <link rel="apple-touch-icon" href="{{asset('front/theme-luiza/apple-touch-icon-57x57.png')}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front/theme-luiza/apple-touch-icon-72x72.png')}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/theme-luiza/apple-touch-icon-76x76.png')}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front/theme-luiza/apple-touch-icon-114x114.png')}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('front/theme-luiza/apple-touch-icon-120x120.png')}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front/theme-luiza/apple-touch-icon-144x144.png')}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('front/theme-luiza/apple-touch-icon-152x152.png')}}"/>--}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EBB030QMRB"></script>

    <meta property="og:title" content="Innova Webcreations" />
    <meta property="og:type" content="Business website" />
    <meta property="og:url" content="{{ Request::url() }}"/>
    @foreach($post->photos as $photo)
        <meta property="og:image" content="{{  $photo ? asset('images/posts') . $photo->file : 'http://placehold.it/62x62'}}" />
    @endforeach
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="og:site_name" content="InnovaWebcreations" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:alt" content="Innova Webcreations software bedrijf voor het maken van websites en webshops" />
</head>
