@if($post)
<script type="application/ld+json">
{ "@context": "https://schema.org",
 "@type": "BlogPosting",
 "headline": " {{ $post->titel }} ",
 "alternativeHeadline": " {{ $post->seo_alternativeTitle }} ",
 "image": " {{ asset('images/posts') . $photo->file }} ",
 "award": "Best article ever written",
 "genre": " {{ $post->postcategory->name }}",
 "keywords": "{{ $post->seo_keywords }}",
 "wordcount": " {{ $post->seo_wordCount  }} ",
 "publisher": "{{ $company->companyName }}",
     "url": " {{ $post->seo_url }} ",
     "datePublished": " {{ $post->book }} ",
     "dateCreated": "{{ $post->created_at }}",
     "dateModified": " {{ $post->updated_at }}",
     "description": " {{ $post->seo_description }} ",
 "articleBody": "{!! $post->body !!} " ,
   "author": {
    "@type": "Person",
    "name": "Innova"
  }
 }
</script>
@endif
