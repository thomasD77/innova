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

    //Page content
    @yield('content')




@include('front.includes.footer')

<script>
    if (typeof(atob) == "undefined")
    {
        document.write('<script src="{{asset('front/theme-luiza/lib/stringencoders-v3.10.3/javascript/base64.js')}}"><\/script>');
        var atob = function(x)
        {
            return base64.decode(x);
        }
    }
</script>
<script src="{{asset('front/theme-luiza/bower_components/less.js/dist/less.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/lib/tween/tween.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/lib/modernizr-edited.js')}}"></script>
<script src="{{asset('front/theme-luiza/lib/SmoothScroll-1.4.9/SmoothScroll.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{asset('front/theme-luiza/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/minicolors/jquery.minicolors.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/slick.js/slick/slick.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/shufflejs/dist/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/textillate/assets/jquery.lettering.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/textillate/assets/jquery.fittext.js')}}"></script>
<script src="{{asset('front/theme-luiza/bower_components/textillate/jquery.textillate.js')}}"></script>
<script src="{{asset('front/theme-luiza/lib/prism/prism.js')}}"></script>
<script>
    (function()
    {
        var disableMobileAnimations = true;
        var isWin = navigator.appVersion.indexOf("Win") !== -1;
        if (isWin) $('html').addClass('win');
        var ua = navigator.userAgent.toLowerCase();
        var isChrome = ua.indexOf('chrome') > -1;
        if (isChrome) $('html').addClass('chrome');
        var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
        if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
        var isSafari = !isChrome && ua.indexOf('safari') !== -1;
        if (isSafari) $('html').addClass('safari');
        var isMobile = false; //Change false to Modernizr.touch if you want to disable animations on touchscreen devices;
        if (isMobile)
        {
            $('html').addClass('mobile');
            if (disableMobileAnimations) $('html').addClass('poor-browser');
        }
        else
        {
            $('html').addClass('non-mobile');
        }
        if (isWin && isSafari)
        {
            $('html').addClass('flat-animation');
        }
    })();
</script>
<script src="{{asset('front/theme-luiza/scripts/script-bundle.js')}}"></script>
<script>
    if (Function('/*@cc_on return document.documentMode===9@*/')())
    {
        $('html').addClass('ie9');
    }
    if (Function('/*@cc_on return document.documentMode===10@*/')())
    {
        $('html').addClass('ie10');
    }
    if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
    {
        $('html').addClass('ie11');
    }
</script>
</body>
</html>
