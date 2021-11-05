<?php use Brian2694\Toastr\Facades\Toastr;require '../resources/inc/_global/config.php'; ?>
<?php require '../resources/inc/backend/config.php'; ?>
<?php require '../resources/inc/_global/views/head_start.php'; ?>
<?php require '../resources/inc/_global/views/head_end.php'; ?>
<?php require '../resources/inc/_global/views/page_start.php'; ?>

<!-- Hero Content -->
<div class="bg-primary-dark" style="background-image: url({{asset('images/general/banner6.png')}}); background-size: cover  ; background-repeat: no-repeat ">
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

                <h2>ABOUT</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_1" >{{ $credential->text_1 }}</textarea>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Design</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_2" >{{ $credential->text_2 }}</textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Web Development</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_3" >{{ $credential->text_3 }}</textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Client Support</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_4" >{{ $credential->text_4 }}</textarea>
                    </div>
                </div>


                <h2>HOW WE WORK</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_5" >{{ $credential->text_5 }}</textarea>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Awesome</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_6" >{{ $credential->text_6 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Innovative</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_7" >{{ $credential->text_7 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Creative</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_8" >{{ $credential->text_8 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <label class="form-label" for="text_1">Experimental</label>
                        <textarea class="form-control js-ckeditor5-classic"  name="text_9" >{{ $credential->text_9 }}</textarea>
                    </div>
                </div>

                <h2>FOUNDER</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_10" >{{ $credential->text_10 }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label">Photo 1</label>
                    @if(isset($photos[0]))
                        <div class="mb-4">
                            <img class="rounded" height="150" width="150" src="{{$photos[0] ? asset('images/form_credentials') . $photos[0]->file   : 'http://placehold.it/62x62'}}" alt="photo">
                        </div>
                    @endif
                    <div class="form-group mb-4">
                        <label class="form-label" for="frontend-contact-email">New Photo? </label>
                        <input type="file" class="form-control w-50" id="frontend-contact-tagline" name="photo_1">
                    </div>
                </div>

                <h2>SERVICES</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_11" >{{ $credential->text_11 }}</textarea>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_1" value="{{ $credential->input_1 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_12" >{{ $credential->text_12 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_2" value="{{ $credential->input_2 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_13" >{{ $credential->text_13 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_3" value="{{ $credential->input_3 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_14" >{{ $credential->text_14 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_4" value="{{ $credential->input_4 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_15" >{{ $credential->text_15 }}</textarea>
                    </div>
                </div>

                <h2>OUR PROCESS</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_16" >{{ $credential->text_16 }}</textarea>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_5" value="{{ $credential->input_5 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_17" >{{ $credential->text_17 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_6" value="{{ $credential->input_6 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_18" >{{ $credential->text_18 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_7" value="{{ $credential->input_7 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_19" >{{ $credential->text_19 }}</textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="input_8" value="{{ $credential->input_8 }}">
                        <textarea class="form-control js-ckeditor5-classic"  name="text_20" >{{ $credential->text_20 }}</textarea>
                    </div>
                </div>
                <textarea class="form-control js-ckeditor5-classic"  name="text_21" >{{ $credential->text_21 }}</textarea>

                <h2>SERVICES</h2>
                <div class="mb-4">
                    <label class="form-label" for="text_1">Subtitle</label>
                    <textarea class="form-control js-ckeditor5-classic"  name="text_22" >{{ $credential->text_22 }}</textarea>
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
            <h2 class="mt-4">SERVICES</h2>
            @include('admin.includes.content-value2', ['parent_id' => 'services'])
        </div>
        <div class="block block-rounded">
            <h2 class="mt-4">SKILLS</h2>
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

