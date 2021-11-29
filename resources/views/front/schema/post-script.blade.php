<script type="application/ld+json">
    {
    "@context": "https://schema.org",
     "@type": "BlogPosting",
     "headline": " {{ $post->title }} ",
     "alternativeHeadline": " {{ $post->alternativeTitle ?? null }} ",
     "image": " {{ asset('images/posts') . $post->photo->file }} ",
     "editor": "{{ $company->companyName }}",
     "genre": " {{ $post->postcategory->name }}",
     "keywords": "{{ $post->keywords ?? null }}",
     "wordcount": " {{ $post->wordCount ?? null  }} ",
     "publisher": "{{ $company->companyName }}",
     "url": " {{ $post->seo_url ?? null }} ",
     "datePublished": " {{ $post->book }} ",
     "dateCreated": "{{ $post->created_at }}",
     "dateModified": " {{ $post->updated_at }}",
     "description": " {{ $post->description ?? null }} ",
     "articleBody": "{{ $post->body }}"
     }
</script>


