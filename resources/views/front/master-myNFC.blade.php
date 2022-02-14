@include('front.includes.top-head-myNFC')

@include('front.includes.myNFCheader')


    @yield('content')

{{--Google SEO--}}
@include('front.schema.organisation-script')
@include('front.schema.website-script')

@include('front.includes.footer-myNFC')

@include('front.includes.page-end-myNFC')
