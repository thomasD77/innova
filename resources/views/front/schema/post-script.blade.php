@if($post)
    <script type="application/ld+json">
    { "@context": "https://schema.org",
     "@type": "BlogPosting",
     "headline": " {{ $post->titel }} ",
     "alternativeHeadline": " {{ $post->seo_alternativeTitle ?? null }} ",
     "image": " {{ asset('images/posts') . $photo->file }} ",
     "editor": "{{ $company->companyName }}",
     "genre": " {{ $post->postcategory->name }}",
     "keywords": "{{ $post->seo_keywords ?? null }}",
     "wordcount": " {{ $post->seo_wordCount ?? null  }} ",
     "publisher": "{{ $company->companyName }}",
     "url": " {{ $post->seo_url ?? null }} ",
     "datePublished": " {{ $post->book }} ",
     "dateCreated": "{{ $post->created_at }}",
     "dateModified": " {{ $post->updated_at }}",
     "description": " {{ $post->seo_description ?? null }} ",
     "articleBody": "{{ $post->body }}" }
    </script>
@endif
