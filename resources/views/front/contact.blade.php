@extends('front.master-front')
@section('content')

    <section id="contact">
        <div class="view">
            <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/contact-min.jpg')}}" />
            <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/contact_4-min.jpg')}}" />
            <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/contact_3-min.jpg')}}" />
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
                                            <div class="g-recaptcha" id="g-recaptcha" data-sitekey="{{ config('custom.RECAPTCHA_SITE_KEY') }}"></div>
                                        </div>
                                        <div class="col-md-12 form-actions">
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



@endsection

