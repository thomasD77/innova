@extends('front.master-front')
@section('content')


<section id="home">
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_img_10.jpg')}}" />
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_img_11.jpg')}}" />--}}
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_img_12.jpg')}}" />--}}
        <div class="content home-suzi full-size colors-d background-0">
            <div class="container">
                <h2><span class="thin-font-weight f">We <span class="highlight">Are</span></span></h2>
                <h1 class="text-center">{{ substr_replace($company->companyName, "", -2) }}<span class="highlight thin-font-weight">{{ substr($company->companyName, -2) }}</span></h1>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <p class="title text-center">
                            {{ $data->input_2 }}
                        </p>
                    </div>
                </div>
                <p class="text-center"><a href="#about" class="button background-60-d heading-d border-hard">About Us</a><a href="{{ route('contact') }}" class="button background-60-f heading-f border-hard">Contact Us</a></p>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_pic2-min.jpg')}}" />
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
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/how_we_work-min.jpg')}}" />--}}
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/how_we_work_2-min.jpg')}}" />
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
                <h2>TEAM</h2>
                <p class="header-details"><span class="highlight">Who </span>We Are</p>
                <p class="lead">{{ $data->text_3 }}</p>
                <div class="row">
                    <div class="col-md-4 col-sm-3"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="hover-overlay">
                            @if($photos->isNotEmpty())
                                @if($photos[0]->is_active == 1)
                                    <img class="fluid-width" src="{{$photos[0] ? asset('images/content') . $photos[0]->file   : 'http://placehold.it/62x62'}}" alt="photo">
                                @endif
                            @endif
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Demeulenaere Thomas</span>
                                <br/>
                                <span class="highlight">Founder</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Academy">
    <div id></div>
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>Academy</h2>
                <p class="header-details"><span class="highlight">What </span>We Teach</p>
                <p class="lead">Een nieuwe website, SUPER! Alles is dynamisch aan te passen in het admin gedeelte van uw
                    webiste/webshop. Dit is voor ons als
                    software experten dagelijkse kost. Maar voor iemand die hier niet zoveel mee bezig is kan dit
                    overweldigend zijn. Daarom hebben we bij
                    Innova de Academy opgezet. Wanneer een klant ingelogd is komt er een extra tab in de navigatie bar
                    met de naam "Academy".
                    Op deze pagina maken we custom per klant videos met de belangrijke stappen voor dit project. Zo is
                    er ook de mogelijkheid
                    om dit meerdere keren te bekijken tot alles heel duidelijk is. Let op, onze service is steeds
                    beschikbaar! Dit is enkel een uitbereiding,
                    een gids door het software landschap. Hieronder een voorbeeld hoe dit werkt:
                </p>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <iframe
                                src="https://www.youtube.com/embed/yV3XA_ub910"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                style="width: 100%; height: 500px"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>Services</h2>
                <p class="header-details"><span class="highlight">We Are Here</span> For You</p>
                <p class="lead">{{ $data->text_4 }}</p>
                <div class="row">
                    @php
                        $teller = 1
                    @endphp
                    @foreach($contents as $content)
                        @if($content->parent_id == 'services')
                            <div class="col-md-3 top-line">
                                @if($photos->isNotEmpty())
                                    @if($photos[$teller]->is_active == 1)
                                        <img class="fluid-width rounded" src="{{$photos[$teller] ? asset('images/content') . $photos[$teller]->file   : 'http://placehold.it/62x62'}}" alt="photo">
                                    @endif
                                    @php
                                        $teller ++
                                    @endphp
                                @endif
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
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/quote-min.jpg')}}" />
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/quote_2-min.jpg')}}" />--}}
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/quote_3-min.jpg')}}" />--}}
        <div class="content half-size colors-h">
            <div class="container">
                <div class="show-list slogan">
                    @foreach($contents as $content)
                        @if($content->parent_id == "quotes")
                            <div class="show-item">{{ $content->title }}</div>
                        @endif
                    @endforeach
                </div>
                <div class="separator"></div>
                <p class="text-center big-font">
                    <em>— {{ $data->input_1 }} —</em>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="Work">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>OUR WORK</h2>
                <p class="header-details"><span class="highlight">What </span>We Create</p>
                <p class="lead">{{ $data->text_9 }}</p>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="hover-overlay">
                            @if($photos->isNotEmpty())
                                @if($photos[5]->is_active == 1)
                                    <a href="https://www.huiszenenzo.be" target="_blank"><img class="fluid-width" src="{{$photos[5] ? asset('images/content') . $photos[5]->file   : 'http://placehold.it/62x62'}}" alt="photo"></a>
                                @endif
                            @endif
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Huis Zen&Zo</span>
                                <br/>
                                <span class="highlight">Yoga/Shiatsu</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="hover-overlay">
                            @if($photos->isNotEmpty())
                                @if($photos[6]->is_active == 1)
                                    <a href="https://www.kasturi-modeling.be" target="_blank"><img class="fluid-width" src="{{$photos[6] ? asset('images/content') . $photos[6]->file   : 'http://placehold.it/62x62'}}" alt="photo"></a>
                                @endif
                            @endif
                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">Kasturi</span>
                                <br/>
                                <span class="highlight">Modeling</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="hover-overlay">

                            <a href="https://www.frituurdeflandrien.be" target="_blank"><img class="fluid-width 100vh" style="height: 100%;"  src="{{ asset('images/content/frituur.jpg') }}" alt="photo"></a>

                        </div>
                        <div class="caption">
                            <p>
                                <span class="title">De Flandrien</span>
                                <br/>
                                <span class="highlight">Food&Beverage</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <a  class="text-center mt-3" href="{{ route('contact') }}"><p style="font-size: 18px" class="text-center">>> Contact Us <<</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view" id="numbers">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/numbers-min.jpg')}}" />
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/numbers_2-min.jpg')}}" />--}}
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
                <p class="text-center ">Know your numbers' is a fundamental precept of business - Bill Gates -</p>
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
                                    <div class="tab-pane {{ $index == 25 ? 'active in' : 'fade' }} " id="{{ $content->title }}">
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

@endsection

