@extends('layouts.auth')

@section('content')

  <form method="POST" action="/login">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    @error('email', 'password')
      <p class="text-danger">{{ $message }}</p>
    @enderror
    <button type="submit" class="w-100 btn btn-primary">Login</button>
    <p>You don't have an account ? <a href="/signup">Signup</a></p>
  </form>

@endsection