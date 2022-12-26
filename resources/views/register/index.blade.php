@extends('layouts.main')

@section('container')
<main class="form-signin w-100 m-auto">

    <form method="post" action="/register">
        @csrf
      <h1 class="h3 mb-3 fw-normal">Register</h1>

      <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
         @enderror
      </div>

      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}">
        <label for="username">username</label>
        @error('username')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
         @enderror
      </div>

      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
         @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
        <label for="password">Password</label>
        @error('password')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
         @enderror
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>

    <small>Have Account ? <a href="/login">Login Now</a> </small>
    
  </main>
@endsection