@extends('layout.custom')

@section('title', "Register")

@section('content')
<div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
      <div class="login-brand">
        <img src="../assets/img/inventapp.png" alt="logo" width="250">
      </div>

      <div class="card card-primary">
        <div class="card-header"><h4>Register</h4></div>

        <div class="card-body">
          <form method="POST">
            @csrf
            {{-- <div class="row">
            </div> --}}
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control @error('email')
                  is-invalid
              @enderror" name="email">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-6">
                <label for="password" class="d-block">Password</label>
                <input id="password" type="password" class="form-control @error('password')
                    is-invalid
                @enderror" name="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              </div>
              <div class="form-group col-6">
                <label for="password_confirmation" class="d-block">Password Confirmation</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">
                Register
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="text-muted text-center">
        Have an account? <a href="{{ route('login') }}">Sign In</a>
      </div>
    </div>
  </div>
@endsection
