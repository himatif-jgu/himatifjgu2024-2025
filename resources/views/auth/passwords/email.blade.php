@extends('layouts.authentication.master')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
             @endif
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="{{url('/')}}" class="app-brand-link gap-2">
                <span class="app-brand-logo demo"></span>
                <span class="app-brand-text demo text-body fw-bold">{{config('variables.templateName')}}</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Forgot Password</h4>
            <p class="mb-4">Masukan Email Yang Valid untuk Reset Password!</p>
  
            <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('password.email') }}">
                @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Email Adress</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
             
            
              <button class="btn btn-primary d-grid w-100">
                Send Email
              </button>
            </form>
  
            <p class="text-center">
              <span>Already have an account?</span>
              <a href="{{url('login')}}">
                <span>Sign in instead</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
@endsection
