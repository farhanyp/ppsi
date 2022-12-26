p
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $post["title"] }}</h1>

            <p>by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }} </a></p>

            <img src="https://placeimg.com/1200/400/{{ $post->category->slug }}" class="img-fluid" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
                {!! $post["body"] !!}
            </article>
            
            <a href="/blog" class="text-decoration-none">Back to blog</a>
        </div>
    </div>
</div>


@endsection