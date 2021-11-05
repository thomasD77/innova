@extends('front.master-front')
@section('content')

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
                <p class="text-center"><a href="#about" class="button background-60-d heading-d border-hard">About Us</a><a href="#contact" class="button background-60-f heading-f border-hard">Contact Us</a></p>
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
                        <p class="text-center">{{ $data->text_6 }}</p>
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
                <p class="lead">{{ $data->text_7 }}</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="widget-tabs nav nav-tabs background-lite-e">
                            @foreach($contents as $content)
                                @if($content->parent_id == "skills")
                                    <li class="{{ $loop->first ? 'active' : '' }}"><a href="#{{$content->title}}" data-toggle="tab">{{$content->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach($contents as $index => $content)
                                @if($content->parent_id == "skills")
                                    <div class="tab-pane {{ $index == 1 ? 'active in' : 'fade' }} " id="{{ $content->title }}">
                                        <p> {{ $content->text }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="skillbars">
                            @foreach($contents as $index => $content)
                                @if($content->parent_id == "skills")
                                    <div class="skillbar clearfix background-d" data-percent="{{ $content->number }}%">
                                        <div class="skillbar-title background-b heading-b"><span>{{ $content->title }}</span></div>
                                        <div class="skillbar-bar background-b"></div>
                                        <div class="skill-bar-percent heading-d">{{ $content->number }}%</div>
                                    </div>
                                @endif
                            @endforeach
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
