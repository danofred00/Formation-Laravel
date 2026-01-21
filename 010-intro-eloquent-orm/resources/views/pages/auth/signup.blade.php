@extends('layouts.auth')

@section('formTitle') Signup @endsection

@section('content')

  <form method="POST" action="/signup">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
      <label for="password-confirmation" class="form-label">Confirm Password</label>
      <input type="text" name="password_confirmation" class="form-control" id="password-confirmation">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="checkbox">
      <label class="form-check-label" for="checkbox">Yes, I accept privacy policies and terms</label>
    </div>
      @if (session('errors'))
        <p class="alert alert-danger">{{ session('errors')->first() }}</p>        
      @endif
    <button type="submit" class="w-100 btn btn-primary">Signup</button>
    <p>I already have an account! <a href="/signup">Login</a></p>
  </form>

@endsection