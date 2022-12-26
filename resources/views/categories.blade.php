
@extends('layouts.main')

@section('container')
<h1>Post Categories:{{ $title }} </a></h3>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                <div class="card text-bg-dark">
                    <img src="https://placeimg.com/500/500/{{ $category->slug }}" class="card-img"alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center">
                      <h5 class="card-title text-center flex-fill fs-3">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach 
        </div>
    </div>
@endsection