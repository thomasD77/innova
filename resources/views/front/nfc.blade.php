@include('front.includes.top-head')


<body style="background-color: #101010">
    <div class="container">
        <div class="row">
            <section class="text-center" style="padding-left: 25px; padding-right: 25px">

                <div style="margin-bottom: 50px">

                    @if($photos)
                        @php
                            $photo = \App\Models\Photo::where('credential_id', $credential->id)->first()
                        @endphp

                        @if($photo)
                            <input type="hidden" name="photo" value="{{$photo->id}}">
                        @endif
                    @endif
                    <img class="rounded-circle" height="150" width="150" src="{{$photo ? asset('images/form_credentials') . $photo->file : 'http://placehold.it/62x62'}}" alt="{{$credential->firstname}}">
                </div>

                <label class="form-label mt-3" for="frontend-contact-email" style="color: white">Bedrijf</label>
                <label class="form-control" for="frontend-contact-email" style="color: white">{{ $credential->companyName }}</label>

                <label class="form-label mt-3" for="frontend-contact-firstname" style="color: white; margin-top: 10px">Naam</label>
                <label class="form-control mt-3" for="frontend-contact-firstname" style="color: white">{{ $credential->firstname . " " . $credential->lastname }}</label>

                <label class="form-label mt-3" for="frontend-contact-firstname" style="color: white; margin-top: 10px">Adres</label>
                <label class="form-control mt-3" for="frontend-contact-firstname" style="color: white">
                    {{ $credential->address}} ,

                    {{ $credential->zip}} ,

                    {{ $credential->city}}
                </label>

                <label class="form-label mt-3" for="frontend-contact-email" style="color: white">Telefoon</label>
                <label class="form-control" for="frontend-contact-email" style="color: white !important; text-decoration: none">{{ $credential->mobile }}</label>

                <label class="form-label mt-3" for="frontend-contact-email" style="color: white">Email</label>
                <label class="form-control" for="frontend-contact-email" style="color: white">{{ $credential->email }}</label>

                <label class="form-label mt-3" for="frontend-contact-email" style="color: white">Website</label>
                <label class="form-control" for="frontend-contact-email" style="color: white">{{ $credential->url }}</label>

                <label class="form-label mt-3" for="frontend-contact-email" style="color: white">Facebook</label>
                <label class="form-control" for="frontend-contact-email" style="color: white">{{ $credential->facebook }}</label>

                <label class="form-label mt-3" for="frontend-contact-email" style="color: white">Instagram</label>
                <label class="form-control" for="frontend-contact-email" style="color: white">{{ $credential->instagram }}</label>


                <a href="{{ route('nfc-information') }}"><button style="color: black;
                background-color: lightgoldenrodyellow;
                margin-top: 15px;
                font-weight: bolder;
                margin-bottom: 15px;
                padding-top: 3px;
                padding-bottom: 3px;
                padding-left: 5px;
                padding-right: 5px;
                border: none;">Voeg me toe!</button></a>
            </section>
        </div>
    </div>
</body>



@include('front.includes.page-end')
