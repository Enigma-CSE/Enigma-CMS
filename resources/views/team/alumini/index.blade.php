@extends('layouts.app')

@section('title', 'Alumimi')

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
              <h3 class="ep-breadcrumbs__title">Team</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('alumini') }}">Alumini</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Team Area -->
    <section class="ep-team section-gap position-relative pd-top-90">
      <div class="container ep-container">
        <div class="row">
          <!-- Single Team -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div class="ep-team__card ep-team__card--style3 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" >
              <a href="{{ route('team-details') }}" class="ep-team__img">
                <img src="assets/images/team/team-1/1.png" alt="team-img" />
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
          </div>
          <!-- Single Team -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-team__card ep-team__card--style3 wow fadeInUp"
              data-wow-delay=".5s"
              data-wow-duration="1s"
            >
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
          </div>
          <!-- Single Team -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-team__card ep-team__card--style3 wow fadeInUp"
              data-wow-delay=".7s"
              data-wow-duration="1s"
            >
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
          </div>
          <!-- Single Team -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-team__card ep-team__card--style3 wow fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration="1s"
            >
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
          </div>
          <!-- Single Team -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-team__card ep-team__card--style3 wow fadeInUp"
              data-wow-delay=".5s"
              data-wow-duration="1s"
            >
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
          </div>
          <!-- Single Team -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-team__card ep-team__card--style3 wow fadeInUp"
              data-wow-delay=".7s"
              data-wow-duration="1s"
            >
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
    <!-- End Team Area -->
  </main>
@endsection