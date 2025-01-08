@extends('layouts.app')

@section('content') 
<section class="ep-error section-gap mt-5">
    <div class="container ep-container mt-5">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-xl-5 col-md-8 col-12">
          <div class="ep-error__inner text-center">
            <div class="ep-error__img">
              <img
                src="{{ asset('assets/images/error-img.svg') }}"
                alt="error-img"
              />
            </div>
            <div class="ep-error__content">
              <h3>OPPS! Page Not Found</h3>
              <p>
                We are sorry, But the page you requested was not found
              </p>
              <div class="ep-error__btn">
                <a href="{{ route('home') }}" class="ep-btn ep5-bg">
                  <i class="fi fi-rs-arrow-small-left"></i>Back to Home
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection