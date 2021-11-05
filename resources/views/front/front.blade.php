@extends('front.master-front')
@section('content')
<body class="state1 background-100-e">
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
<div class="page-border left colors-e background-solid">
    <ul>
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
        <li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
        <li><a href="http://www.skype.com/" target="_blank"><i class="fa fa-skype"></i></a></li>
    </ul>
</div>
<!-- BEGIN: Top menu -->
<div class="page-border right colors-e background-solid"></div>
<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
    <div class="container">
        <div class="navbar-header">
            <a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>
            <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
            <a class="navbar-brand" href="">INNO<span class="highlight">VA</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="hover-effect">Home</a></li>
                <li><a href="#about" class="hover-effect">About</a></li>
                <li><a href="#team" class="hover-effect">Team</a></li>
                <li><a href="#services" class="hover-effect">Services</a></li>
                <li><a href="#work" class="hover-effect">Work</a></li>
                <li><a href="#process" class="hover-effect">Process</a></li>
                <li><a href="#skills" class="hover-effect">Skills</a></li>
                <li><a href="#contact" class="hover-effect">Contact</a></li>
                <li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>
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
<!-- BEGIN: Page content -->
<section id="home">
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-2.jpg')}}" /><img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-1.jpg')}}" />
        <div class="content home-suzi full-size colors-d background-0">
            <div class="container">
                <h2><span class="thin-font-weight">We <span class="highlight">Are</span></span></h2>
                <h1 class="text-center">SKROLL<span class="highlight thin-font-weight">EX</span></h1>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <p class="title text-center">
                            Integer ligula ante, posuere et ante quis, eleifend eleifend ipsum. In sed odio mi vivamus dapibus gravida.
                        </p>
                    </div>
                </div>
                <p class="text-center"><a href="#about" class="button background-60-d heading-d border-hard">About Us</a><a href="#work" class="button background-60-f heading-f border-hard">Our Work</a></p>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-2.jpg')}}" />
        <div class="content pane">
            <div class="container-fluid">
                <div class="row hidden-xs hidden-sm">
                    @foreach($contents as $content)
                        @if($content->parent_id == 'header')
                            <div class="col-md-4 colors-b">
                                <div class="row">
                                    <div class="col-xs-12 banner-cell">
                                        <h3 class="light-font-weight">{{ $content->title }}</h3>
                                        <p class="title">{{ $content->subtitle }}</p>
                                    </div>
                                    <div class="col-xs-12 success heading-b banner-cell">
                                        {!! $content->text  !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>About</h2>
                <p class="header-details"><span class="highlight">We Create</span> Awesome Stuff</p>
                <p class="lead">{{ $data->text_1 }}</p>
                <div class="row">
                    @foreach($contents as $content)
                        @if($content->parent_id == 'about')
                            <div class="col-md-4">
                                <div class="col-icon">
                                    <i class="{{ $content->subtitle }}"></i>
                                </div>
                                <div class="col-content">
                                    <h4>{{ $content->title }}</h4>
                                    <p>{{ $content->text }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="view" id="how-we-work">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-0.jpg')}}" /><img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-1.jpg')}}" />
        <div class="content colors-h">
            <div class="container">
                <h3><span class="highlight">How</span> We Work</h3>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="text-center">{{ $data->text_2 }}</p>
                    </div>
                </div>
                <div class="row icon-set">
                    @foreach($contents as $content)
                        @if($content->parent_id == "howWeWork")
                            <div class="col-md-3 text-center">
                                <p>
                                    <i class="{{ $content->subtitle }}" data-animation="fadeInUp"></i>
                                </p>
                                <p class="title">{{ $content->title }}</p>
                                <p>{{ $content->text }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>FOUNDER</h2>
                <p class="header-details"><span class="highlight">Who </span>We Are</p>
                <p class="lead">{{ $data->text_3 }}</p>
                <div class="row">
                    <div class="col-md-4 col-sm-3"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="hover-overlay">
                            @if($photos->isNotEmpty())
                            <img class="fluid-width" src="{{$photos[0] ? asset('images/content') . $photos[0]->file   : 'http://placehold.it/62x62'}}" alt="photo">
{{--                            <div class="overlay background-90-b">--}}
{{--                                <div>--}}
{{--                                    <p class="text-center text-uppercase heading-b">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--                                    </p>--}}
{{--                                    <div class="separator-small"></div>--}}
{{--                                    <p class="text-center">--}}
{{--                                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook heading-b"></i></a>--}}
{{--                                        <a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube heading-b"></i></a>--}}
{{--                                        <a target="_blank" href="https://github.com/"><i class="fa fa-github heading-b"></i></a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                                @endif
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Demeulenaere Thomas</span>
                                <br/>
                                <span class="highlight">CEO &amp; Founder</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="view" id="who-we-are">--}}
{{--        <div class="content pane">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6 stretch-height pane">--}}
{{--                        <div class="view fluid-height">--}}
{{--                            <img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-2.jpg')}}" />--}}
{{--                            <div class="content incut colors-d background-transparent">--}}
{{--                                <div class="position-middle-center text-center">--}}
{{--                                    <a class="button background-lite-c heading-c" href="#work">View Our Work</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6  stretch-height pane">--}}
{{--                        <div class="view fluid-height">--}}
{{--                            <div class="content incut colors-h background-solid">--}}
{{--                                <div class="position-middle-center">--}}
{{--                                    <h3 class="text-left"><span class="highlight">Who</span> We Are</h3>--}}
{{--                                    <p class="subtitle highlight"><strong>Quisque dolor lacus, commodo id hendrerit viverra, euismod in odio.</strong></p>--}}
{{--                                    <p>Aliquam fermentum massa ac est sollicitudin, at ultricies ligula tristique. Cras finibus, nulla ac convallis feugiat, nisl nisl lobortis est, eget auctor velit magna vel nunc. Donec nec eros rhoncus.</p>--}}
{{--                                    <p>Aenean nisi neque, aliquam ut nibh sit amet, finibus sagittis tortor aenean consectetur.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>

<section id="services">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>Services</h2>
                <p class="header-details"><span class="highlight">We Are Here</span> For You</p>
                <p class="lead">{{ $data->text_4 }}</p>
                <div class="row">
                    @foreach($contents as $content)
                        @if($content->parent_id == 'services')
                            <div class="col-md-3 top-line">
                                <h4>{{ $content->title }}</h4>
                                <p>{!!  $content->text  !!}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-0.jpg')}}" /><img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-1.jpg')}}" /><img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-2.jpg')}}" />
        <div class="content half-size colors-h">
            <div class="container">
                <div class="show-list slogan">
                    <div class="show-item">We Are Designers</div>
                    <div class="show-item">We Are Programmers</div>
                    <div class="show-item">We Are Coders</div>
                    <div class="show-item">We Are Developers</div>
                    <div class="show-item">We Are Creative</div>
                </div>
                <div class="separator"></div>
                <p class="text-center big-font">
                    <em>— Beyond Webcreation —</em>
                </p>
            </div>
        </div>
    </div>
</section>

{{--<section id="work">--}}
{{--    <div class="view">--}}
{{--        <div class="content no-bottom-padding colors-e background-solid">--}}
{{--            <div class="container">--}}
{{--                <h2>Our <span class="highlight">Work</span></h2>--}}
{{--                <p class="header-details"><span class="highlight">Some Recent</span> Projects</p>--}}
{{--                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>--}}
{{--            </div>--}}
{{--            <div class="gallery colors-h background-solid" data-default-group="all" data-overlay=".gallery-overlay">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="filter">--}}
{{--                        <ul class="nav nav-pills text-center">--}}
{{--                            <li><a class="hover-effect" data-group="all" href="#">All</a></li>--}}
{{--                            <li><a class="hover-effect" data-group="web" href="#">Web</a></li>--}}
{{--                            <li><a class="hover-effect" data-group="video" href="#">Video</a></li>--}}
{{--                            <li><a class="hover-effect" data-group="photography" href="#">Photography</a></li>--}}
{{--                            <li><a class="hover-effect" data-group="design" href="#">Design</a> </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="grid">--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["design"]'>--}}
{{--                                <a href="#!portfolio-item-1.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 1" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-0jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Image</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web", "video"]'>--}}
{{--                                <a href="#!portfolio-item-2.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 2" src="{{asset('front/theme-luiza/images/placeholders/500x400-1.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">YouTube Video</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-youtube-square heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design"]'>--}}
{{--                                <a href="#!portfolio-item-3.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 3" src="{{asset('front/theme-luiza/images/placeholders/500x400-2.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Slider</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-th heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web", "video"]'>--}}
{{--                                <a href="#!portfolio-item-4.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 4" src="{{asset('front/theme-luiza/images/placeholders/500x400-0.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Vimeo Video</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design"]'>--}}
{{--                                <a href="#!portfolio-item-5.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 5" src="{{asset('front/theme-luiza/images/placeholders/500x400-1.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Slider</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-th heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web", "design"]'>--}}
{{--                                <a href="#!portfolio-item-6.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 6" src="{{asset('front/theme-luiza/images/placeholders/500x400-2.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Image</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["design", "video", "web"]'>--}}
{{--                                <a href="#!portfolio-item-7.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 7" src="{{asset('front/theme-luiza/images/placeholders/500x400-0.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Vimeo Video</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["web"]'>--}}
{{--                                <a href="#!portfolio-item-8.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 8" src="{{asset('front/theme-luiza/images/placeholders/500x400-1.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Image</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design", "video", "web"]'>--}}
{{--                                <a href="#!portfolio-item-9.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 9" src="{{asset('front/theme-luiza/images/placeholders/500x400-2.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">YouTube Video</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-youtube-square heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design"]'>--}}
{{--                                <a href="#!portfolio-item-10.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 10" src="{{asset('front/theme-luiza/images/placeholders/500x400-0.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Vimeo Video</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web"]'>--}}
{{--                                <a href="#!portfolio-item-11.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 11" src="{{asset('front/theme-luiza/images/placeholders/500x400-1.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Image</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["web", "design"]'>--}}
{{--                                <a href="#!portfolio-item-12.html" class="hover-overlay">--}}
{{--                                    <img alt="Project 12" src="{{asset('front/theme-luiza/images/placeholders/500x400-2.jpg')}}" />--}}
{{--                                    <div class="overlay background-90-a">--}}
{{--                                        <div class="hidden-xs">--}}
{{--                                            <p class="title heading-a">Slider</p>--}}
{{--                                            <p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>--}}
{{--                                            <p class="text-center"><i class="fa fa-th heading-a"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section id="process">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>Our <span class="highlight">Process</span></h2>
                <p class="header-details"><span class="highlight">We Make</span> Our Customers Happy</p>
                <p class="lead">{{ $data->text_5 }}</p>
                <div class="process">
                    <div class="row process-row">
                        @foreach($contents as $content)
                            @if($content->parent_id == 'process')
                        <div class="col-md-3 process-step">
                            <div class="process-box"><i class="{{ $content->subtitle }} heading"></i></div>
                            <p class="title">{{ $content->title }}</p>
                            <p class="text-center">{{ $content->text }}</p>
                        </div>
                            @endif
                        @endforeach
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="text-center">{{ $data->text_21 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view" id="numbers">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-0.jpg')}}" /><img alt class="bg" src="{{asset('front/theme-luiza/images/placeholders/1920x1200-1.jpg')}}" />
        <div class="content half-size colors-h">
            <div class="container-fluid">
                <h3>Our <span class="highlight">Numbers</span></h3>
                <p class="title"><span class="highlight">Some of the</span> cool facts about us</p>
                <div class="row counters">
                    @foreach($contents as $content)
                        @if($content->parent_id == "numbers")
                            <div class="col-md-3 counter {{ $content->text }}">
                                <div class="count player row heading background-10-light">{{ $content->number }}</div>
                                <div class="caption">{{ $content->title }}</div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="container">
                <p class="text-center ">Donec vulputate sit amet dolor vel pharetra donec pharetra.</p>
            </div>
        </div>
    </div>
</section>

<section id="skills">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>Our <span class="highlight">Skills</span></h2>
                <p class="header-details"><span class="highlight">Our Main</span> Skills</p>
                <p class="lead">{{ $data->text_6 }}</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="widget-tabs nav nav-tabs background-lite-e">
                            @foreach($contents as $content)
                                @if($content->parent_id == 'skills')
                                    <li class="{{ $loop->first ? 'active' : '' }}"><a href="{{ $content->id }}" data-toggle="tab">{{ $content->title }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($contents as $content)
                                @if($content->parent_id == 'services')
                            <div class="tab-pane " id="{{ $content->id }}">
                                <p>{{ $content->text }}</p>
                            </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skillbars">
                            <div class="skillbar clearfix background-d" data-percent="40%">
                                <div class="skillbar-title background-b heading-b"><span>HTML5</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">40%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="45%">
                                <div class="skillbar-title background-c heading-c"><span>CSS3</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">45%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="50%">
                                <div class="skillbar-title background-b heading-b"><span>jQuery</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">50%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="40%">
                                <div class="skillbar-title background-c heading-c"><span>PHP</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">40%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="90%">
                                <div class="skillbar-title background-b heading-b"><span>Wordpress</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">90%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="75%">
                                <div class="skillbar-title background-c heading-c"><span>SEO</span></div>
                                <div class="skillbar-bar background-c"></div>
                                <div class="skill-bar-percent heading-d">75%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="70%">
                                <div class="skillbar-title background-b heading-b"><span>Photoshop</span></div>
                                <div class="skillbar-bar background-b"></div>
                                <div class="skill-bar-percent heading-d">70%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.includes.contactformulier')
<!-- END: Page content -->

@endsection

