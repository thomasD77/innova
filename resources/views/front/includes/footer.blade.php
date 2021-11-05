<!-- BEGIN: Footer -->
<footer class="colors-g page-transition non-preloading">
    <div class="container scroll-in-animation" data-animation="fadeInDown">
        <div class="row">
            <div class="col-md-3">
                <h4>{{ substr_replace($company->companyName, "", -2) }}<span class="highlight">{{ substr($company->companyName, -2) }}</span></h4>
                <div class="footer-description">
                    <p>{{ $company->tagline }}</p>
                </div>
                <p class="social-links">
                    <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a>
                    <a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-printerest"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                </p>
            </div>
            <div class="col-md-3">
                <h5>Additional Links</h5>
                <ul class="simple">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('home') }}#services">Services</a></li>
                    <li><a href="{{ route('home') }}#process">Process</a></li>
                    <li><a href="{{ route('home') }}#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Recent Posts</h5>
                <ul class="simple">
                    @if($posts)
                        @foreach($posts as $post)
                            <li><a href="">{{ $post->title }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Credentials</h5>
                <ul class="simple">
                    <li>{{ $company->companyName }}</li>
                    <li>{{ $company->email }}</li>
                    <li>{{ $company->mobile }}</li>
                    <li>{{ $company->country }}</li>
                    <li>{{ $company->VAT }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom text-center background-5-b">
        © {{ now()->year }} All Rights Reserved. {{ $company->companyName }}
    </div>
</footer>
<!-- END: Footer -->
