@include('front.includes.top-head')

@include('front.includes.header')


    @yield('content')

{{--Google SEO--}}
@include('front.schema.organisation-script')
@include('front.schema.website-script')

@include('front.includes.footer')

@include('front.includes.page-end')
