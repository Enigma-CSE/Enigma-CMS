@extends('layouts.app')

@section('title', 'Login')


@section('content')
<main>
    <!-- Start Breadcrumbs Area -->
    <div
      class="ep-breadcrumbs breadcrumbs-bg background-image"
      style="background-image: url('assets/images/breadcrumbs-bg.png')"
    >
      {{-- <div class="container"> --}}
        {{-- <div class="row justify-content-center"> --}}
          {{-- <div class="col-lg-6 col-md-6 col-12">
            <div class="ep-breadcrumbs__content">
              <h3 class="ep-breadcrumbs__title">Login</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="login.html">Login</a>
                </li>
              </ul>
            </div>
          </div> --}}
        {{-- </div> --}}
      {{-- </div> --}}
    
    <!-- End Breadcrumbs Area -->
    <!-- Start Auth Area -->
    <section class="ep-auth auth-login section-gap position-relative">
      <div class="container ep-container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-6 col-md-10 col-12">
            <div class="ep-auth__card">
              <div class="ep-auth__card-head">
                <h3 class="ep-auth__card-title">Welcome back!</h3>
                <p class="ep-auth__card-text">Log in to your account</p>
                <div class="ep-auth__card-social">
                  <a href="#" target="_blank">
                    <img
                      src="{{ asset('assets/images/icons/google.svg') }}"
                      alt="google-icon"
                    />Login with Google
                  </a>
                  <a href="#" target="_blank">
                    <img
                      src="{{ asset('assets/images/icons/google.svg') }}"
                      alt="facebook-icon"
                    />Login with Facebook
                  </a>
                </div>
                <div class="ep-auth__another-way">
                  Or log in with Email
                </div>
              </div>
              <div class="ep-auth__card-body">
                <form action="{{ route('user.authenticate') }}" method="POST" class="ep-auth__card-form">
                  @csrf
                  <div class="form-group">
                    <label>Your Email</label>
                    <input
                      type="email"
                      name="email"
                      placeholder="Email address"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <div class="form-group-input">
                      <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter Password"
                        required
                      />
                      <span
                        class="toggle-password"
                        onclick="togglePassword('password')"
                        >Show</span
                      >
                    </div>
                  </div>
                  <div class="ep-auth__card-info">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        id="custom-checkbox"
                        class="form-check-input"
                      />
                      <label
                        title=""
                        for="custom-checkbox"
                        class="form-check-label"
                        >Remember Me</label
                      >
                    </div>
                    <a href="#">Forgot Password?</a>
                  </div>
                  <div class="ep-auth__card-form-btn">
                    <button type="submit" class="ep-btn">Log In</button>
                  </div>
                </form>
              </div>
              <div class="ep-auth__card-bottom">
                <span>Don't have an account?</span>
                <a href="{{ route('register') }}">Sign Up for free</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
    <!-- End Auth Area -->
  </main>
@endsection