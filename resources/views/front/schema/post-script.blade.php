@if($post)
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
     "@type": "BlogPosting",
     "headline": " {{ $post->title }} ",
     "alternativeHeadline": " {{ $post->title }} ",
     "image": " {{ asset('images/posts') . $photo->file }} ",
     "editor": "{{ $company->companyName }}",
     "genre": " {{ $post->postcategory->name }}",
     "keywords": "{{ $post->slug }}",
     "wordcount": "1120",
     "publisher": "{{ $company->companyName }}",
     "url": "http://www.example.com",
     "datePublished": " {{ $post->book }} ",
     "dateCreated": "{{ $post->created_at }}",
     "dateModified": " {{ $post->updated_at }}",
     "description": "We love to do stuff to help people and stuff",
     "articleBody": "{{ $post->body }}",
     }
    </script>
@endif
