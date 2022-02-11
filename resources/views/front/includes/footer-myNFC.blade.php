<!-- BEGIN: Footer -->
<footer class="colors-g page-transition non-preloading" style="padding-top: 0">
    <div class="container scroll-in-animation" data-animation="fadeInDown">
        <div class="row">
            <div class="contacts text-center" >
                <a target="_blank" href="{{ route('vCard')}}">
                    <button type="button" class="btn btn-default heading border-heading">Get Contacts !</button>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom text-center background-5-b">
        © {{ now()->year }} All Rights Reserved. {{ $company->companyName }}
{{--        <a href="{{ route('system', 'cookie') }}">Cookie</a>--}}
    </div>
</footer>
<!-- END: Footer -->
