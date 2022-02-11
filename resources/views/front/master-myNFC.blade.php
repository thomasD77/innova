@include('front.includes.top-head')

@include('front.includes.myNFCheader')


    @yield('content')

{{--Google SEO--}}
@include('front.schema.organisation-script')
@include('front.schema.website-script')

@include('front.includes.footer-myNFC')

@include('front.includes.page-end')
