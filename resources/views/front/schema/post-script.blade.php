@if($post)

<script type="application/ld+json">
    { "@context": "https://schema.org",
     "@type": "BlogPosting",
     "headline": "{{ $post->title }}",
     "alternativeHeadline": "{{ $post->alternativeTitle }}",
     "image": "http://example.com/image.jpg",
     "editor": "{{ $company->companyName }}",
     "genre": "{{ $post->postcategory->name }}",
     "keywords": "{{ $post->keywords }}",
     "wordcount": "{{ $post->wordCount }}",
     "publisher": "{{ $company->companyName }}",
     "url": "{{ $post->url }}",
     "datePublished": "{{ $post->book }}",
     "dateCreated": "{{ $post->created_at }}",
     "dateModified": "{{ $post->updated_at }}",
     "description": "{{ $post->description }}",
     "articleBody": "{{ $post->body }}",
       "author": {
        "@type": "Company",
        "name": "{{ $company->companyName }}"
      }
     }
</script>
@endif
