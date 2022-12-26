@extends('layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('LoginError'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  {{ session('LoginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="form-signin w-100 m-auto">

    <form action="/login" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
         <div class="invalid-feedback">
          {{ $message }}
         </div>
         @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        <label for="password">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>

    <small>Not Registered ? <a href="/register">Register Now</a> </small>
  </main>
@endsection