@extends('front.master-myNFC')
@section('content')

<section id="home">
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/thomas_contact.jpg')}}" />
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_img_10.jpg')}}" />--}}
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_img_11.jpg')}}" />--}}
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/header_img_12.jpg')}}" />--}}
        <div class="content home-suzi full-size colors-d background-0">
            <div class="container">
                <h2><span class="thin-font-weight f">We <span class="highlight">Are</span></span></h2>
                <h1 class="text-center">{{ substr_replace($company->companyName, "", -2) }}<span class="highlight thin-font-weight">{{ substr($company->companyName, -2) }}</span></h1>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <p class="title text-center">
{{--                            {{ $data->input_2 }}--}}
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <a target="_blank" href="{{ route('vCard')}}">
                        <button type="button" class="btn btn-default heading border-heading">Get Contacts !</button>
                    </a>
                </div>

{{--                <p class="text-center"><a href="#about" class="button background-60-d heading-d border-hard">About Us</a><a href="{{ route('contact') }}" class="button background-60-f heading-f border-hard">Contact Us</a></p>--}}
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>ABOUT</h2>
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
<section id="Work">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>OUR WORK</h2>
                <p class="header-details"><span class="highlight">What </span>We Create</p>
                <p class="lead">{{ $data->text_9 }}</p>
                <div class="row">
                    <div class="col-md-2 col-sm-3"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="hover-overlay">
                            @if($photos->isNotEmpty())
                                @if($photos[5]->is_active == 1)
                                    <a href="http://www.huiszenenzo.be" target="_blank"><img class="fluid-width" src="{{$photos[5] ? asset('images/content') . $photos[5]->file   : 'http://placehold.it/62x62'}}" alt="photo"></a>
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
                                    <a href="http://www.kasturi-modeling.be" target="_blank"><img class="fluid-width" src="{{$photos[6] ? asset('images/content') . $photos[6]->file   : 'http://placehold.it/62x62'}}" alt="photo"></a>
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
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" style="padding-left: 5px; padding-right: 5px">
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/thomas_blurr.jpg')}}" />
        {{--            <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/contact_4-min.jpg')}}" />--}}
        {{--            <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/contact_3-min.jpg')}}" />--}}
        <div class="content full-size colors-h">
            <div class="container">
                <h2>Contact</h2>
                <p class="header-details">Keep In Touch</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="text-center">{{ $data->text_8 }}</p>
                    </div>
                </div>
                <div class="row">
                    {{--                    <div class="col-md-6">--}}
                    {{--                        <div class="text-right scroll-in-animation" data-animation="fadeInLeft">--}}
                    {{--                            <p class="big-font uppercase">--}}
                    {{--                                Tel: <strong class="highlight">+7 (781) 503-1810</strong>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="big-font uppercase">--}}
                    {{--                                500 Unicorn Park Dr, 21st Floor--}}
                    {{--                                <br/> Woburn, MA 01801, United States--}}
                    {{--                            </p>--}}
                    {{--                            <p class="big-font">--}}
                    {{--                                <b>--}}
                    {{--                                    <a href="mailto:info@ouraddress.com">info@ouraddress.com</a><br/>--}}
                    {{--                                    <a href="http://www.ouraddress.com">www.ouraddress.com</a>--}}
                    {{--                                </b>--}}
                    {{--                            </p>--}}
                    {{--                            <p class="big-font">--}}
                    {{--                                <a target="_blank" href="https://twitter.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-twitter fa-stack-1x text-background"></i></span></a>--}}
                    {{--                                <a target="_blank" href="https://www.facebook.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-facebook fa-stack-1x text-background"></i></span></a>--}}
                    {{--                                <a target="_blank" href="http://www.youtube.com/"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i class="fa fa-youtube fa-stack-1x text-background"></i></span></a>--}}
                    {{--                            </p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="text-left scroll-in-animation" data-animation="fadeInRight">
                            <form class="row mb-0" name="contactformulier"
                                  action="{{action('App\Http\Controllers\AdminSubmissionController@store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 control-group">
                                        <div class="alt-placeholder">Name</div>
                                        <input type="text" name="name" value="" size="40" placeholder="Name" data-validation-required-message="Please fill the required field." required>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="col-md-6 control-group">
                                        <div class="alt-placeholder">Phone</div>
                                        <input type="number" name="phone" value="" size="40" placeholder="Phone" data-validation-required-message="Please fill the required field." required>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="col-md-6 control-group">
                                        <div class="alt-placeholder">Email</div>
                                        <input type="email" name="email" value="" size="40" placeholder="Email" data-validation-required-message="Please fill the required field." required>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="col-md-12 control-group">
                                        <div class="alt-placeholder">Message</div>
                                        <textarea name="description" placeholder="Message" data-validation-required-message="Please fill the required field." required></textarea>
                                        <div class="help-block"></div>
                                        <p>*akkoord op GDPR bij versturen van contactformulier</p>
                                    </div>
                                    <div class="col-md-12 control-group d-flex align-items-center">
                                        <li class="dropdown" style="list-style-type: none; text-decoration: none">
                                            <a  href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Recaptcha <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                                <li>
                                                    <div class="g-recaptcha"
                                                         id="g-recaptcha"
                                                         data-sitekey="{{ config('custom.RECAPTCHA_SITE_KEY') }}"></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>
                                    <div class="col-md-12 form-actions text-center">
                                        <input class="button" type="submit" value="Send">
                                    </div>
                                </div>
                            </form>

                            <script src="https://www.google.com/recaptcha/api.js"></script>
                        </div>
                    </div>
                </div>
                {{--                <div class="text-center">--}}
                {{--                    <a class="map-open button background-lite-b border-heading-b heading-b" data-map-overlay=".map-overlay" href="#">Locate Us on Map</a>--}}
                {{--                </div>--}}
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

@endsection

