<meta property="og:title" content="Innova Webcreations" />
<meta property="og:type" content="Business website" />
<meta property="og:url" content="{{ Request::url() }}"/>
@foreach($post->photos as $photo)
   
    <meta property="og:image" content="{{  $photo ? asset('images/posts') . $photo->file : 'http://placehold.it/62x62'}}" />
@endforeach
<meta property="twitter:card" content="summary_large_image" />
<meta property="og:site_name" content="InnovaWebcreations" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:alt" content="Innova Webcreations software bedrijf voor het maken van websites en webshops" />
