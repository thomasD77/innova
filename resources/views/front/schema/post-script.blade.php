@if($post)
<script type="application/ld+json">
{ "@context": "https://schema.org",
 "@type": "BlogPosting",
 "headline": "{{ $post->title }}",
 "alternativeHeadline": " {{ $post->seo_alternativeTitle }}",
 "image": "{{ asset('images/posts' . $post->photo->file) }}",
 "editor": "John Doe", 
 "genre": "search engine optimization",
 "keywords": "seo sales b2b",
 "wordcount": "1120",
 "publisher": "Book Publisher Inc",
 "url": "http://www.example.com",
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
