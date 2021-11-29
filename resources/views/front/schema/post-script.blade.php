@if($post)
    <script type="application/ld+json">
    { "@context": "https://schema.org",
     "@type": "BlogPosting",
     "headline": " {{ $post->titel }} ",
     "alternativeHeadline": " {{ $post->alternativeTitle }} ",
     "image": " {{ asset('images/posts') . $photo->file }} ",
     "editor": "{{ $company->companyName }}",
     "genre": " {{ $post->postcategory->name }}",
     "keywords": "{{ $post->keywords }}",
     "wordcount": " {{ $post->wordCount  }} ",
     "publisher": "{{ $company->companyName }}",
     "url": " {{ $post->url }} ",
     "datePublished": " {{ $post->book }} ",
     "dateCreated": "{{ $post->created_at }}",
     "dateModified": " {{ $post->updated_at }}",
     "description": " {{ $post->description }} ",
     "articleBody": "{{ $post->body }}" }
    </script>
@endif
