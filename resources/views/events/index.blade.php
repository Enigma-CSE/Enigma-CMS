@extends('layouts.app')

@section('title', 'Enigma Events')

@section('content')
    <!-- Start Breadcrumbs Area -->
    <div
    class="ep-breadcrumbs breadcrumbs-bg background-image"
    style="background-image: url('assets/images/breadcrumbs-bg.png')"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="ep-breadcrumbs__content">
            <h3 class="ep-breadcrumbs__title">Event</h3>
            <ul class="ep-breadcrumbs__menu">
              <li>
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li>
                <i class="fi-bs-angle-right"></i>
              </li>
              <li class="active">
                <a href="{{ route('events.index') }}">Event</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs Area -->
  <!-- Start Event Area -->
  <section class="ep-blog section-gap position-relative pd-top-90">
    <div class="container ep-container">
      <div class="row">
        <!-- Single Event Card -->
        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
          <div class="ep-blog__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
            <a href="event-details.html" class="ep-blog__img">
              <img src="assets/images/blog/blog-1/1.png" alt="blog-img"/>
            </a>
            <div class="ep-blog__info">
              <div class="ep-blog__date ep1-bg">
                25 <br />
                Dec
              </div>
              <div class="ep-blog__location">
                <i class="fi fi-rs-marker"></i>
                <span>Mirpur Bangladesh</span>
              </div>
              <div class="ep-blog__content">
                <a href="event-details.html" class="ep-blog__title">
                  <h5>Education foundation</h5>
                </a>
                <p class="ep-blog__text">
                  Education is the key to stude Unlock your horizons
                  education
                </p>
                <div class="ep-blog__btn">
                  <a href="event-details.html"
                    >Read More
                    <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Event Card -->
        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
          <div
            class="ep-blog__card wow fadeInUp"
            data-wow-delay=".5s"
            data-wow-duration="1s"
          >
            <a href="event-details.html" class="ep-blog__img">
              <img
                src="assets/images/blog/blog-1/2.png"
                alt="blog-img"
              />
            </a>
            <div class="ep-blog__info">
              <div class="ep-blog__date ep1-bg">
                25 <br />
                Dec
              </div>
              <div class="ep-blog__location">
                <i class="fi fi-rs-marker"></i>
                <span>Mirpur Bangladesh</span>
              </div>
              <div class="ep-blog__content">
                <a href="event-details.html" class="ep-blog__title">
                  <h5>Introduction to Psychology</h5>
                </a>
                <p class="ep-blog__text">
                  Education is the key to stude Unlock your horizons
                  education
                </p>
                <div class="ep-blog__btn">
                  <a href="event-details.html"
                    >Read More
                    <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Event Card -->
        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
          <div
            class="ep-blog__card wow fadeInUp"
            data-wow-delay=".7s"
            data-wow-duration="1s"
          >
            <a href="event-details.html" class="ep-blog__img">
              <img
                src="assets/images/blog/blog-1/3.png"
                alt="blog-img"
              />
            </a>
            <div class="ep-blog__info">
              <div class="ep-blog__date ep1-bg">
                25 <br />
                Dec
              </div>
              <div class="ep-blog__location">
                <i class="fi fi-rs-marker"></i>
                <span>Mirpur Bangladesh</span>
              </div>
              <div class="ep-blog__content">
                <a href="event-details.html" class="ep-blog__title">
                  <h5>Principles of Economics</h5>
                </a>
                <p class="ep-blog__text">
                  Education is the key to stude Unlock your horizons
                  education
                </p>
                <div class="ep-blog__btn">
                  <a href="event-details.html"
                    >Read More
                    <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Event Card -->
        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
          <div
            class="ep-blog__card wow fadeInUp"
            data-wow-delay=".3s"
            data-wow-duration="1s"
          >
            <a href="event-details.html" class="ep-blog__img">
              <img
                src="assets/images/blog/blog-1/1.png"
                alt="blog-img"
              />
            </a>
            <div class="ep-blog__info">
              <div class="ep-blog__date ep1-bg">
                25 <br />
                Dec
              </div>
              <div class="ep-blog__location">
                <i class="fi fi-rs-marker"></i>
                <span>Mirpur Bangladesh</span>
              </div>
              <div class="ep-blog__content">
                <a href="event-details.html" class="ep-blog__title">
                  <h5>Creating Bright Minds</h5>
                </a>
                <p class="ep-blog__text">
                  Education is the key to stude Unlock your horizons
                  education
                </p>
                <div class="ep-blog__btn">
                  <a href="event-details.html"
                    >Read More
                    <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Event Card -->
        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
          <div
            class="ep-blog__card wow fadeInUp"
            data-wow-delay=".5s"
            data-wow-duration="1s"
          >
            <a href="event-details.html" class="ep-blog__img">
              <img
                src="assets/images/blog/blog-1/2.png"
                alt="blog-img"
              />
            </a>
            <div class="ep-blog__info">
              <div class="ep-blog__date ep1-bg">
                25 <br />
                Dec
              </div>
              <div class="ep-blog__location">
                <i class="fi fi-rs-marker"></i>
                <span>Mirpur Bangladesh</span>
              </div>
              <div class="ep-blog__content">
                <a href="event-details.html" class="ep-blog__title">
                  <h5>Nurturing Minds</h5>
                </a>
                <p class="ep-blog__text">
                  Education is the key to stude Unlock your horizons
                  education
                </p>
                <div class="ep-blog__btn">
                  <a href="event-details.html"
                    >Read More
                    <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Event Card -->
        <div class="col-lg-6 col-xl-4 col-md-6 col-12">
          <div
            class="ep-blog__card wow fadeInUp"
            data-wow-delay=".7s"
            data-wow-duration="1s"
          >
            <a href="event-details.html" class="ep-blog__img">
              <img
                src="assets/images/blog/blog-1/3.png"
                alt="blog-img"
              />
            </a>
            <div class="ep-blog__info">
              <div class="ep-blog__date ep1-bg">
                25 <br />
                Dec
              </div>
              <div class="ep-blog__location">
                <i class="fi fi-rs-marker"></i>
                <span>Mirpur Bangladesh</span>
              </div>
              <div class="ep-blog__content">
                <a href="event-details.html" class="ep-blog__title">
                  <h5>Lighting Path to Success</h5>
                </a>
                <p class="ep-blog__text">
                  Education is the key to stude Unlock your horizons
                  education
                </p>
                <div class="ep-blog__btn">
                  <a href="event-details.html"
                    >Read More
                    <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Event Area -->
@endsection