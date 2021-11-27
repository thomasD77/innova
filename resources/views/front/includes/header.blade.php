<body class="state1 background-100-e">

@include('front.includes.tagmanager')

<div class="ext-nav background-95-h page-transition">
    <div class="view half-height">
        <img alt class="bg static" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-2.jpg')}}" />
        <div class="content no-top-padding no-bottom-padding  full-height">
            <div class="container-fluid  full-height">
                <div class="row full-height">
                    <a href="blog.html" class="col-md-6 colors-a background-95-a full-height">
                        <div>
                            <span class="side-label">All The Latest</span>
                            <span class="side-title">Blog</span>
                        </div>
                    </a>
                    <a href="help.html" class="col-md-6 colors-f background-95-f full-height">
                        <div>
                            <span class="side-label">Documentation</span>
                            <span class="side-title">Help</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  half-height">
        <div class="row full-height">
            <a href="#how-we-work" class="col-md-4 colors-g background-solid full-height border-bottom border-lite">
                <div>
                    <span class="side-label">Awesome</span>
                    <span class="side-title">How We Work</span>
                </div>
            </a>
            <a href="#who-we-are" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                <div>
                    <span class="side-label">We Are Designers</span>
                    <span class="side-title">Who We Are</span>
                </div>
            </a>
            <a href="#numbers" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                <div>
                    <span class="side-label">Some Facts</span>
                    <span class="side-title">Our Numbers</span>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>
{{--<div class="page-border left colors-e background-solid">--}}
{{--    <ul>--}}
{{--        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--        <li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>--}}
{{--        <li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>--}}
{{--        <li><a href="http://www.skype.com/" target="_blank"><i class="fa fa-skype"></i></a></li>--}}
{{--    </ul>--}}
{{--</div>--}}
<!-- BEGIN: Top menu -->
<div class="page-border right colors-e background-solid"></div>
<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
    <div class="container">
        <div class="navbar-header">
{{--            <a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>--}}
            <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
            <a class="navbar-brand text-uppercase" href="{{ route('home') }}">{{ substr_replace($company->companyName, "", -2) }}<span class="highlight">{{ substr($company->companyName, -2) }}</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('home') }}" class="hover-effect">Home</a></li>
                <li><a href="{{ route('home') }}#about" class="hover-effect">About</a></li>
                <li><a href="{{ route('home') }}#services" class="hover-effect">Services</a></li>
                <li><a href="{{ route('home') }}#process" class="hover-effect">Process</a></li>
                <li><a href="{{ route('blog') }}" class="hover-effect">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="hover-effect">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END: Top menu -->
<ul id="dot-scroll" class="colors-e background-solid"></ul>
<div class="overlay-window gallery-overlay colors-g background-95-g" data-overlay-zoom="#work .content">
    <div class="overlay-control background-90-b">
        <a class="previos" href="#"></a>
        <a class="next" href="#"></a>
        <a class="cross" href="#"></a>
    </div>
    <div class="overlay-view"></div>
    <ul class="loader">
        <li class="background-highlight-e"></li>
        <li class="background-highlight-e"></li>
        <li class="background-highlight-e"></li>
    </ul>
</div>
<div class="overlay-window map-overlay colors-h background-75-h">
    <div class="overlay-control background-90-g">
        <a class="cross" href="#"></a>
    </div>
    <div class="overlay-view">
        <div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
            <div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
            <div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
        </div>
    </div>
</div>
<div class="overlay-window credits-overlay colors-g background-95-g">
    <div class="overlay-control background-90-b">
        <a class="cross" href="#"></a>
    </div>
    <div class="overlay-view">
        <div class="content-container">
            <h3>Credits</h3>
            <ul>
                <li>
                    Photos by:
                    <ul>
                        <li><a target="_blank" href="https://www.flickr.com/photos/katya_alagich/">Katya Alagich</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                        <li><a target="_blank" href="https://www.flickr.com/photos/65047661@N00/">Jim Lukach</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                        <li><a target="_blank" href="https://www.flickr.com/photos/johanl/">Johan Larsson</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                        <li><a target="_blank" href="https://www.flickr.com/photos/johny/">John Kraus</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                        <li><a target="_blank" href="https://www.flickr.com/photos/geishaboy500/">THOR</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                        <li><a target="_blank" href="https://www.flickr.com/photos/stf-o/">stephane</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
                        <li><a target="_blank" href="http://www.pexels.com/">Pexels</a>, <a target="_blank" href="http://www.pexels.com/photo-license/">CC0 License</a></li>
                        <li><a target="_blank" href="https://stocksnap.io/">Stocksnap</a>, <a target="_blank" href="https://stocksnap.io/license">CC0 License</a></li>
                        <li><a target="_blank" href="http://picjumbo.com/">Picjumbo</a>, <a target="_blank" href="http://picjumbo.com/about-author/">Picjumbo License</a></li>
                    </ul>
                </li>
                <li>
                    Video by:
                    <ul>
                        <li><a target="_blank" href="http://mazwai.com/">Mazwai</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0 License</a></li>
                    </ul>
                </li>
                <li>
                    Icons by:
                    <ul>
                        <li><a target="_blank" href="http://designmodo.com/">Designmodoh</a>, <a target="_blank" href="http://designmodo.com/linecons-free/">License</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="gate colors-e background-solid">
    <div class="gate-bar background-heading-e"></div>
    <ul class="loader">
        <li class="background-heading-e"></li>
        <li class="background-heading-e"></li>
        <li class="background-heading-e"></li>
    </ul>
</div>
