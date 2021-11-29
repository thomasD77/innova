@if($post)
{{--    <script type="application/ld+json">--}}
{{--    { "@context": "https://schema.org",--}}
{{--     "@type": "BlogPosting",--}}
{{--     "headline": " {{ $post->titel }} ",--}}
{{--     "alternativeHeadline": " {{ $post->seo_alternativeTitle ?? null }} ",--}}
{{--     "image": " {{ asset('images/posts') . $photo->file }} ",--}}
{{--     "editor": "{{ $company->companyName }}",--}}
{{--     "genre": " {{ $post->postcategory->name }}",--}}
{{--     "keywords": "{{ $post->seo_keywords ?? null }}",--}}
{{--     "wordcount": " {{ $post->seo_wordCount ?? null  }} ",--}}
{{--     "publisher": "{{ $company->companyName }}",--}}
{{--     "url": " {{ $post->seo_url ?? null }} ",--}}
{{--     "datePublished": " {{ $post->book }} ",--}}
{{--     "dateCreated": "{{ $post->created_at }}",--}}
{{--     "dateModified": " {{ $post->updated_at }}",--}}
{{--     "description": " {{ $post->seo_description ?? null }} ",--}}
{{--     "articleBody": "{{ $post->body }}" }--}}
{{--    </script>--}}

<script type="application/ld+json">
{ "@context": "https://schema.org",
 "@type": "BlogPosting",
 "headline": "14 Ways Json Can Improve Your SEO",
 "alternativeHeadline": "and the women who love them",
 "image": "http://example.com/image.jpg",
 "award": "Best article ever written",
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
