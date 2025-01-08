@extends('layouts.app')

@section('title', 'Team Details')

@section('content')
<main>
    <!-- Start Breadcrumbs Area -->
    <div
      class="ep-breadcrumbs breadcrumbs-bg background-image"
      style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}')"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="ep-breadcrumbs__content">
              <h3 class="ep-breadcrumbs__title">Team Details</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('team-details') }}">Team Details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Team Details Area -->
    <section class="ep-team__details section-gap position-relative">
      <div class="container ep-container">
        <div class="row">
          <div class="col-12">
            <div class="ep-team__details-inner">
              <div class="ep-team__details-thumb">
                <img
                  src="assets/images/team/team-1/3.png"
                  alt="thumb-img"
                />
              </div>
              <div class="ep-team__details-info">
                <div class="ep-team__details-author">
                  <h3>Shahriar Nafiz</h3>
                  <p>Development And Teacher</p>
                </div>
                <div class="ep-team__details-meta">
                  <div class="ep-team__details-rattings">
                    <span>Rating:</span>
                    <ul>
                      <li>
                        <i class="icofont-star"></i>
                      </li>
                      <li>
                        <i class="icofont-star"></i>
                      </li>
                      <li>
                        <i class="icofont-star"></i>
                      </li>
                      <li>
                        <i class="icofont-star"></i>
                      </li>
                      <li>
                        <i class="icofont-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="ep-team__details-student">
                    Student: <span>120</span>
                  </div>
                </div>
                <div class="ep-team__details-desc">
                  <h4>About Me</h4>
                  <p>
                    Education is a vital aspect of a child's development.
                    Preschools, elementary schools, and middle schools
                    play a significant role in providing quality education
                    an fostering the a Education is a vital aspect of a
                    child's development. Preschools, elementary the
                    schools, and middle schools play a significant role in
                    providing
                  </p>
                  <br />
                  <p>
                    Education is a vital aspect of a child's development.
                    Preschools, elementary schools, and middle schools
                    play a significant role in providing quality
                  </p>
                </div>
                <div class="ep-team__details-social">
                  <h4 class="ep-team__details-social-title">
                    Contact Me
                  </h4>
                  <div class="ep-team__details-contact">
                    <i class="fi-rr-phone-call"></i>
                    <span>012 345 678 9101</span>
                  </div>
                  <ul class="ep-team__details-social-list">
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-pinterest"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Details Area -->
    <!-- Start Realted Team Area -->
    <section class="ep-team__related section-gap position-relative pt-0">
      <div class="container ep-container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-xl-6 col-md-8 col-12">
            <div class="ep-section-head text-center">
              <span class="ep-section-head__sm-title ep2-color"
                >Meet Our Expert Team</span
              >
              <h3 class="ep-section-head__big-title ep-split-text left">
                Dedicated Professionals <span>Committed</span> to Your
                Success
              </h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="owl-carousel ep-team__related-slider">
            <!-- Single Team -->
            <div class="ep-team__card ep-team__card--style3">
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img
                  src="assets/images/team/team-1/1.png"
                  alt="team-img"
                />
              </a>
              <div class="ep-team__content">
                <div class="ep-team__author">
                  <a href="{{ route('team-details') }}">
                    <h5>Bessie Cooper</h5>
                  </a>
                  <p>Mentor</p>
                </div>
                <div class="ep-team__social">
                  <span class="ep-team__social-btn">
                    <i class="fi-rr-share"></i>
                  </span>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Team -->
            <div class="ep-team__card ep-team__card--style3">
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img
                  src="assets/images/team/team-1/2.png"
                  alt="team-img"
                />
              </a>
              <div class="ep-team__content">
                <div class="ep-team__author">
                  <a href="{{ route('team-details') }}">
                    <h5>Arlene McCoy</h5>
                  </a>
                  <p>Senior Mentor</p>
                </div>
                <div class="ep-team__social">
                  <span class="ep-team__social-btn">
                    <i class="fi-rr-share"></i>
                  </span>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Team -->
            <div class="ep-team__card ep-team__card--style3">
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img
                  src="assets/images/team/team-1/3.png"
                  alt="team-img"
                />
              </a>
              <div class="ep-team__content">
                <div class="ep-team__author">
                  <a href="{{ route('team-details') }}">
                    <h5>Brooklyn Simmons</h5>
                  </a>
                  <p>Assistant Teacher</p>
                </div>
                <div class="ep-team__social">
                  <span class="ep-team__social-btn">
                    <i class="fi-rr-share"></i>
                  </span>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Team -->
            <div class="ep-team__card ep-team__card--style3">
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img
                  src="assets/images/team/team-1/4.png"
                  alt="team-img"
                />
              </a>
              <div class="ep-team__content">
                <div class="ep-team__author">
                  <a href="{{ route('team-details') }}">
                    <h5>Wade Warren</h5>
                  </a>
                  <p>Mentor</p>
                </div>
                <div class="ep-team__social">
                  <span class="ep-team__social-btn">
                    <i class="fi-rr-share"></i>
                  </span>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Team -->
            <div class="ep-team__card ep-team__card--style3">
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img
                  src="assets/images/team/team-1/5.png"
                  alt="team-img"
                />
              </a>
              <div class="ep-team__content">
                <div class="ep-team__author">
                  <a href="{{ route('team-details') }}">
                    <h5>Brooklyn Simmons</h5>
                  </a>
                  <p>Senior Mentor</p>
                </div>
                <div class="ep-team__social">
                  <span class="ep-team__social-btn">
                    <i class="fi-rr-share"></i>
                  </span>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Team -->
            <div class="ep-team__card ep-team__card--style3">
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img
                  src="assets/images/team/team-1/6.png"
                  alt="team-img"
                />
              </a>
              <div class="ep-team__content">
                <div class="ep-team__author">
                  <a href="{{ route('team-details') }}">
                    <h5>Darlene Robertson</h5>
                  </a>
                  <p>Assistant Teacher</p>
                </div>
                <div class="ep-team__social">
                  <span class="ep-team__social-btn">
                    <i class="fi-rr-share"></i>
                  </span>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="icofont-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icofont-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Realted Team Area -->
  </main>
@endsection