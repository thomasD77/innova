@extends('front.master-front')
@section('content')
<!-- BEGIN: Page content -->
<section>
    <div class="view">
        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/blog-min.jpg')}}" />
{{--        <img alt class="bg" src="{{asset('front/theme-luiza/images/bg/blog_2-min.jpg')}}" />--}}
        <div class="content half-size colors-a">
            <div class="container">
                <h2>Our <span class="highlight">Blog</span></h2>
                <p class="title">{{ $company->companyName }} <span class="highlight">Story</span></p>
            </div>
        </div>
    </div>
    <div class="view">
        <div class="content small-top-padding colors-e background-solid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div style="margin-top: 15px" class="row post">
                            @if($posts)
                                @foreach($posts as $post)
                                <div class="col-md-3 post-meta">
                                    <div class="post-day">{{ \Illuminate\Support\Carbon::parse($post->book)->format('d') }}</div>
                                    <div class="post-month">{{ \Illuminate\Support\Carbon::parse($post->book)->format('M-y') }}</div>
                                </div>
                                <div class="col-md-9">
                                    <div class="post-body background-10-b">
                                        <div class="post-image">
                                            <div class="slider">
                                                @foreach($post->photos as $photo)
                                                <a href="{{ route('post', $post->slug) }}"><img class="fluid-width" alt="Slide 1" src="{{$photo ? asset('images/posts') . $photo->file : 'http://placehold.it/62x62'}}"/></a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <h3><a class="page-transition" href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h3>
                                       <p>
                                           {!! Str::limit($post->body, 500) !!}
                                       </p>

                                        <p><a href="{{ route('post', $post->slug) }}" class="post-read-more page-transition">Read more...</a></p>
                                        <div class="post-tags styled-list">
                                            <i class="fa fa-tags"></i>
                                            <ul>
                                                <li><a class="page-transition" href="">{{ $post->postcategory->name }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="center-block">
                            {{ $posts->links() }}
                        </div>
                </div>

                    <div class="col-md-3 sidebar page-transition">
                        <div class="title">Recent Posts</div>
                        <ul>
                            @if($recentposts)
                                @foreach($recentposts as $post)
                                    <li><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        <div class="title">Categories</div>
                        <ul>
                            @if($postcategories)
                                @foreach($postcategories as $category)
                                    <li><a href="" title="View all posts filed under Art">{{ $category->name }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Page content -->
@endsection

