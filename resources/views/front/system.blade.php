@extends('front.master-front')
@section('content')


<section id="about">
    <div class="view">
        <div class="content colors-e background-solid">
            <div class="container">
                <h2>{{ $data->input_1 }}</h2>
                <p class="lead">{!! $data->text_1 !!}</p>
            </div>
        </div>
    </div>
</section>


@endsection

