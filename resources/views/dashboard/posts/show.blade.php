@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $post["title"] }}</h1>

            <a href="/dashboard/posts" class="badge bg-info text-decoration-none p-2 fs-7">Back to my Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none p-2 fs-7">Edit Posts</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0 p-2">Delete</button>
              </form>

            <img src="https://placeimg.com/1200/400/{{ $post->category->slug }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
                {!! $post["body"] !!}
            </article>
            
            <a href="/blog" class="text-decoration-none">Back to blog</a>
        </div>
    </div>
</div>

@endsection