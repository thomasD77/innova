<div class="mb-4">
    <label class="form-label">Photo {{ $image_id }}</label>
    @if(isset($photos[$image_id - 1]))
        <div class="mb-4">
            <img class="rounded" height="150" width="150" src="{{$photos[$image_id - 1] ? asset('images/content') . $photos[$image_id - 1]->file   : 'http://placehold.it/62x62'}}" alt="photo">
        </div>
        <p>Measurements: {{ $photos[$image_id - 1] ? $photos[$image_id - 1]->WxH : 'Original' }}</p>
    @endif
    <div class="form-group mb-4">
        <label class="form-label" for="frontend-contact-email">New Photo? </label>
        <input type="file" class="form-control w-50" id="frontend-contact-tagline" name="photo_1">

    </div>
    <p>
        <button class="btn btn-light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$image_id}}" aria-expanded="false" aria-controls="collapseWidthExample">
            customize
        </button>
    </p>
    <div class="collapse collapse-horizontal" id="collapse{{$image_id}}">
        <div class=" d-flex justify-content-between">
            <div class="form-group col-5 mb-4">
                {!! Form::label('x-as', 'Width:') !!}
                {!! Form::number('pictWidth' . $image_id,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-5 mb-4">
                {!! Form::label('y-as', 'Height:') !!}
                {!! Form::number('pictHeight' . $image_id,null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
</div>
