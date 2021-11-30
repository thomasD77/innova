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
     "datePublished": "2015-09-20",
     "dateCreated": "2015-09-20",
     "dateModified": "2015-09-20",
     "description": "We love to do stuff to help people and stuff",
     "articleBody": "You can paste your entire post in here, and yes it can get really really long.",
       "author": {
        "@type": "Person",
        "name": "Steve"
      }
     }
</script>
@endif
