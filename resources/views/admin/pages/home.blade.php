<?php require '../resources/inc/_global/config.php'; ?>
<?php require '../resources/inc/backend/config.php'; ?>
<?php require '../resources/inc/_global/views/head_start.php'; ?>
<?php require '../resources/inc/_global/views/head_end.php'; ?>
<?php require '../resources/inc/_global/views/page_start.php'; ?>
<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/cropperjs/cropper.min.css'); ?>

<!-- Hero Content -->
<div class="bg-primary-dark parent" style="background-image: url({{asset('images/general/banner6.png')}}); background-size: cover  ; background-repeat: no-repeat ">
    @include('admin.includes.flash')
    <div class="content content-full text-center pt-7 pb-5">
        <h1 class="h2 text-white mb-2">
            Home Page Builder
        </h1>
        <h2 class="h4 fw-normal text-white-75">
            Here you can Build & Change the Content of your Home Page!
        </h2>
    </div>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="bg-body-extra-light">
    <div class="content">
        <div class="row items-push justify-content-center">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\HomePageController@update',$credential->id],'files'=>true])!!}
            <div class="row">

                <h2>HEADER title</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Intro</label>
                    <input type="text" class="form-control"  name="input_2" value="{{ $credential->input_2 }}" >
                </div>

                <h2>ABOUT</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_1" >{{ $credential->text_1 }}</textarea>
                </div>

                <h2>HOW WE WORK</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_2" >{{ $credential->text_2 }}</textarea>
                </div>

                <h2>FOUNDER</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_3" >{{ $credential->text_3 }}</textarea>
                </div>

                @include('admin.includes.image', ['image_id' => 1])

                <h2>SERVICES</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_4" >{{ $credential->text_4 }}</textarea>
                </div>

                <h2>QUOTE</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Slogan</label>
                    <input type="text" class="form-control"  name="input_1" value="{{ $credential->input_1 }}" >
                </div>

                <h2>OUR PROCESS</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_5" >{{ $credential->text_5 }}</textarea>
                    <textarea class="form-control js-ckeditor5-classic mt-2"  name="text_6" >{{ $credential->text_6 }}</textarea>
                </div>

                <h2>OUR SKILLS</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_7" >{{ $credential->text_7 }}</textarea>
                </div>

                <h2>CONTACT PAGE:</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_8" >{{ $credential->text_8 }}</textarea>
                </div>


            <div class="my-4">
                <button type="submit" class="btn btn-alt-primary">
                    <i class="fa fa-paper-plane me-1 opacity-50"></i> Save
                </button>
            </div>
            </form>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <h2 class="text-center">Content Blocks</h2>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">HEADER POINTS</h3>
            @include('admin.includes.content-value', ['parent_id' => 'header'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">ABOUT</h3>
            @include('admin.includes.content-value', ['parent_id' => 'about'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">HOW WE WORK</h3>
            @include('admin.includes.content-value', ['parent_id' => 'howWeWork'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">SERVICES</h3>
            @include('admin.includes.content-value2', ['parent_id' => 'services'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">Quote</h3>
            @include('admin.includes.content-value6', ['parent_id' => 'quotes'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">OUR PROCESS</h3>
            @include('admin.includes.content-value', ['parent_id' => 'process'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">OUR NUMBERS</h3>
            @include('admin.includes.content-value5', ['parent_id' => 'numbers'])
        </div>

        <div class="block block-rounded">
            <h3 class="mt-4 text-uppercase">SKILLS</h3>
            @include('admin.includes.content-value3', ['parent_id' => 'skills'])
        </div>

    </div>
</div>
<!-- END Page Content -->

<?php require '../resources/inc/_global/views/page_end.php'; ?>
<?php require '../resources/inc/_global/views/footer_start.php'; ?>

<?php $one->get_js('js/plugins/ckeditor5-classic/build/ckeditor.js'); ?>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
    <script>One.helpersOnLoad(['js-ckeditor5']);</script>

    <!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/cropperjs/cropper.min.js'); ?>

<?php require '../resources/inc/_global/views/footer_end.php'; ?>

