@extends('layouts.app')

@section('title', 'Course')

@section('content')
<main>
    <!-- Start Breadcrumbs Area -->
    <div
      class="ep-breadcrumbs breadcrumbs-bg background-image"
      style="background-image: url('assets/images/breadcrumbs-bg.png')"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="ep-breadcrumbs__content">
              <h3 class="ep-breadcrumbs__title">Course details</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('course-details') }}">Course details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Course Details Area -->
    <section class="ep-course__details section-gap position-relative">
      <div class="container ep-container">
        <div class="row">
          <div class="col-lg-12 col-xl-8 col-12">
            <div class="ep-course__details-tab">
              <div class="row">
                <div class="col-12">
                  <!-- Tab Menu -->
                  <div class="ep-course__tab-menu tab-menu">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a
                        class="list-group-item active"
                        data-bs-toggle="list"
                        href="#overview"
                        role="tab"
                      >
                        Overview
                      </a>
                      <a
                        class="list-group-item"
                        data-bs-toggle="list"
                        href="#curriculum"
                        role="tab"
                      >
                        Curriculum
                      </a>
                      <a
                        class="list-group-item"
                        data-bs-toggle="list"
                        href="#instructor"
                        role="tab"
                      >
                        Instructor
                      </a>
                      <a
                        class="list-group-item"
                        data-bs-toggle="list"
                        href="#reviews"
                        role="tab"
                      >
                        Reviews
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <!-- Tab Details -->
                  <div class="ep-course__tab-details tab-details">
                    <div class="tab-content" id="nav-tabContent">
                      <!-- Overview -->
                      <div
                        class="tab-pane fade show active"
                        id="overview"
                        role="tabpanel"
                      >
                        <div class="ep-course__overview">
                          <div class="ep-course__overview-widget">
                            <h3 class="ep-course__overview-title">
                              Course Description
                            </h3>
                            <p class="ep-course__overview-text">
                              Aliquam eros justo, posuere loborti vive rra
                              laoreet matti ullamc orper posu ere viverra
                              .Aliquam eros justo, posuer lobortis non,
                              vive rra laoreet augue mattis fermentum
                              ullamcorper viverra laoreet Aliquam es an
                              justo, posuere loborti viverra laoreet mat
                              ullamcorper posue viverra .Aliquam eros
                            </p>
                            <br />
                            <p class="ep-course__overview-text m-0">
                              Aliquam eros justo, posuere loborti vive rra
                              laoreet matti ullamc orper posu ere viverra
                              .Aliquam eros justo, posuer lobortis non,
                              vive rra laoreet augue mattis fermentum
                              ullamcorper viverra
                            </p>
                          </div>
                          <div class="ep-course__overview-widget">
                            <h3 class="ep-course__overview-title">
                              What You’ll Learn?
                            </h3>
                            <ul>
                              <li>
                                <i class="fi-ss-check-circle"></i
                                >Nurturing Young Minds
                              </li>
                              <li>
                                <i class="fi-ss-check-circle"></i>Building
                                a Bright Future Together
                              </li>
                              <li>
                                <i class="fi-ss-check-circle"></i
                                >Unlocking Potential Through Education
                              </li>
                              <li>
                                <i class="fi-ss-check-circle"></i
                                >Empowering Children Through Education
                              </li>
                              <li>
                                <i class="fi-ss-check-circle"></i>Igniting
                                Curiosity and Imagination
                              </li>
                              <li>
                                <i class="fi-ss-check-circle"></i>Growing
                                Genius Elementary School
                              </li>
                            </ul>
                            <br />
                            <br />
                            <p class="ep-course__overview-text">
                              Aliquam eros justo, posuere loborti viverra
                              laoreet matti ullam corper posuere viverra
                              .Aliquam eros justo, posuere lobortis
                              viverra laoreet augue mattis fermentum
                              ullamcorper viverra
                            </p>
                            <br />
                            <p class="ep-course__overview-text m-0">
                              Aliquam eros justo, posuere loborti viverra
                              laoreet matti ullam corper posuere viverra
                              .Aliquam eros justo, posuere lobortis
                              viverra laoreet augue mattis fermentum
                              ullamcorper viverra Growing Genius
                              Elementary School Growing Genius Elementary
                              School Growing Genius Elementary School
                            </p>
                          </div>
                          <div class="ep-course__overview-widget">
                            <h3 class="ep-course__overview-title">
                              More Details
                            </h3>
                            <p class="ep-course__overview-text">
                              Aliquam eros justo, posuere loborti vive rra
                              laoreet matti ullamc orper posu ere viverra
                              .Aliquam eros justo, posuer lobortis non,
                              vive rra laoreet augue mattis fermentum
                              ullamcorper viverra laoreet Aliquam es an
                              justo, posuere loborti viverra laoreet mat
                              ullamcorper posue viverra .Aliquam eros
                            </p>
                            <br />
                            <p class="ep-course__overview-text m-0">
                              Aliquam eros justo, posuere loborti vive rra
                              laoreet matti ullamc orper posu ere viverra
                              .Aliquam eros justo, posuer lobortis non,
                              vive rra laoreet augue mattis fermentum
                              ullamcorper viverra
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- Curriculum -->
                      <div
                        class="tab-pane fade"
                        id="curriculum"
                        role="tabpanel"
                      >
                        <div class="ep-course__curriculum">
                          <div
                            class="ep-course__accordion accordion"
                            id="accordionExample"
                          >
                            <!-- Course Curriculum Item -->
                            <div class="ep-course__accordion-item">
                              <h2
                                class="accordion-header"
                                id="headingOne"
                              >
                                <button
                                  class="accordion-button"
                                  type="button"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne"
                                  aria-expanded="true"
                                  aria-controls="collapseOne"
                                >
                                  The First Steps
                                </button>
                              </h2>
                              <div
                                id="collapseOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="ep-course__accordion-body">
                                  <ul>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Introduction
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Course Overview
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Local Development Environment
                                        Tools
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Course Excercise
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Embedding PHP in HTML
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Using Dynamic Data
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- Course Curriculum Item -->
                            <div class="ep-course__accordion-item">
                              <h2
                                class="accordion-header"
                                id="headingTwo"
                              >
                                <button
                                  class="accordion-button collapsed"
                                  type="button"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#collapseTwo"
                                  aria-expanded="false"
                                  aria-controls="collapseTwo"
                                >
                                  Data Types and More
                                </button>
                              </h2>
                              <div
                                id="collapseTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="ep-course__accordion-body">
                                  <ul>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Introduction
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Course Overview
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Local Development Environment
                                        Tools
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Course Excercise
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Embedding PHP in HTML
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Using Dynamic Data
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- Course Curriculum Item -->
                            <div class="ep-course__accordion-item">
                              <h2
                                class="accordion-header"
                                id="headingThree"
                              >
                                <button
                                  class="accordion-button collapsed"
                                  type="button"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#collapseThree"
                                  aria-expanded="false"
                                  aria-controls="collapseThree"
                                >
                                  Control Structure
                                </button>
                              </h2>
                              <div
                                id="collapseThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="ep-course__accordion-body">
                                  <ul>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Introduction
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Course Overview
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Local Development Environment
                                        Tools
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Course Excercise
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Embedding PHP in HTML
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="text">
                                        <i class="fi fi-rr-edit"></i>
                                        Using Dynamic Data
                                      </div>
                                      <div class="icon">
                                        <i class="fi fi-rr-lock"></i>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Instructor -->
                      <div
                        class="tab-pane fade"
                        id="instructor"
                        role="tabpanel"
                      >
                        <div class="ep-course__instructor">
                          <div class="ep-course__instructor-thumb">
                            <img
                              src="assets/images/team/team-1/1.png"
                              alt="instructor"
                            />
                          </div>
                          <div class="ep-course__instructor-info">
                            <h6>Bessie Cooper</h6>
                            <span>Assistant Teacher</span>
                            <p>
                              Lorem Ipsum is simply dummy text of the
                              printing and typesetting industry. Lorem
                              Ipsum has been the industry's standard dummy
                              text ever since the 1500s, when an unknown
                              printer took a galley...
                            </p>
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
                      <!-- Reviews -->
                      <div
                        class="tab-pane fade"
                        id="reviews"
                        role="tabpanel"
                      >
                        <div class="ep-course__review">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="ep-course__rating-box">
                                <div class="ep-course__rating-number">
                                  5.0
                                </div>
                                <div class="rating">
                                  <i class="icofont-star"></i>
                                  <i class="icofont-star"></i>
                                  <i class="icofont-star"></i>
                                  <i class="icofont-star"></i>
                                  <i class="icofont-star"></i>
                                </div>
                                <span>(25 Review)</span>
                              </div>
                            </div>
                            <div class="col-lg-8">
                              <div class="ep-course__review-wrapper">
                                <div class="single-progress-bar">
                                  <div class="rating-text">
                                    5 <i class="icofont-star"></i>
                                  </div>
                                  <div class="progress">
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      style="width: 100%"
                                      aria-valuenow="100"
                                      aria-valuemin="0"
                                      aria-valuemax="100"
                                    ></div>
                                  </div>
                                  <span class="rating-value">1</span>
                                </div>
                                <div class="single-progress-bar">
                                  <div class="rating-text">
                                    4 <i class="icofont-star"></i>
                                  </div>
                                  <div class="progress">
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      style="width: 0%"
                                      aria-valuenow="0"
                                      aria-valuemin="0"
                                      aria-valuemax="100"
                                    ></div>
                                  </div>
                                  <span class="rating-value">0</span>
                                </div>
                                <div class="single-progress-bar">
                                  <div class="rating-text">
                                    3 <i class="icofont-star"></i>
                                  </div>
                                  <div class="progress">
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      style="width: 0%"
                                      aria-valuenow="0"
                                      aria-valuemin="0"
                                      aria-valuemax="100"
                                    ></div>
                                  </div>
                                  <span class="rating-value">0</span>
                                </div>
                                <div class="single-progress-bar">
                                  <div class="rating-text">
                                    2 <i class="icofont-star"></i>
                                  </div>
                                  <div class="progress">
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      style="width: 0%"
                                      aria-valuenow="0"
                                      aria-valuemin="0"
                                      aria-valuemax="100"
                                    ></div>
                                  </div>
                                  <span class="rating-value">0</span>
                                </div>
                                <div class="single-progress-bar">
                                  <div class="rating-text">
                                    1 <i class="icofont-star"></i>
                                  </div>
                                  <div class="progress">
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      style="width: 0%"
                                      aria-valuenow="0"
                                      aria-valuemin="0"
                                      aria-valuemax="100"
                                    ></div>
                                  </div>
                                  <span class="rating-value">0</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="ep-course__comment-wrapper">
                            <h5 class="ep-course__comment-title">
                              Reviews
                            </h5>
                            <!-- Single Comment -->
                            <div class="ep-course__comment">
                              <div class="ep-course__comment-thumb">
                                <img
                                  src="assets/images/course/details/student-1.png"
                                  alt="comment-thumb-img"
                                />
                              </div>
                              <div class="ep-course__comment-content">
                                <div class="ep-course__comment-top">
                                  <h6 class="title">Elen Saspita</h6>
                                  <div class="rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                  </div>
                                </div>
                                <span class="subtitle"
                                  >“ Outstanding Course ”</span
                                >
                                <p>
                                  As Thomas pointed out, Chegg’s survey
                                  appears more like a scorecard that
                                  details obstacles and challenges that
                                  the current university undergraduate
                                  student population is going through in
                                  their universities and countries.
                                </p>
                              </div>
                            </div>
                            <!-- Single Comment -->
                            <div class="ep-course__comment">
                              <div class="ep-course__comment-thumb">
                                <img
                                  src="assets/images/course/details/student-2.jpg"
                                  alt="comment-thumb-img"
                                />
                              </div>
                              <div class="ep-course__comment-content">
                                <div class="ep-course__comment-top">
                                  <h6 class="title">David Gea</h6>
                                  <div class="rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star off-color"></i>
                                    <i class="icofont-star off-color"></i>
                                  </div>
                                </div>
                                <span class="subtitle"
                                  >“ Very Helpful Course ”</span
                                >
                                <p>
                                  As Thomas pointed out, Chegg’s survey
                                  appears more like a scorecard that
                                  details obstacles and challenges that
                                  the current university undergraduate
                                  student population is going through in
                                  their universities and countries.
                                </p>
                              </div>
                            </div>
                            <!-- Single Comment -->
                            <div class="ep-course__comment">
                              <div class="ep-course__comment-thumb">
                                <img
                                  src="assets/images/course/details/student-3.jpg"
                                  alt="comment-thumb-img"
                                />
                              </div>
                              <div class="ep-course__comment-content">
                                <div class="ep-course__comment-top">
                                  <h6 class="title">Alena Hedge</h6>
                                  <div class="rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star off-color"></i>
                                  </div>
                                </div>
                                <span class="subtitle"
                                  >“ Wonderful Course ”</span
                                >
                                <p>
                                  As Thomas pointed out, Chegg’s survey
                                  appears more like a scorecard that
                                  details obstacles and challenges that
                                  the current university undergraduate
                                  student population is going through in
                                  their universities and countries.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Tab Details -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xl-4 col-md-8 col-12">
            <div class="ep-course__sidebar">
              <div
                class="ep-video__bg background-image position-relative"
                style="
                  background-image: url('assets/images/course/details/sidebar-img.png');
                "
              >
                <a
                  href="https://www.youtube.com/watch?v=gyGsPlt06bo"
                  class="ep-video__btn popup-video"
                >
                  <i class="fi fi-sr-play"></i>
                </a>
              </div>
              <div class="ep-course__sidebar-data">
                <h4 class="ep-course__sidebar-title">Course Includes</h4>
                <ul class="ep-course__sidebar-data-list">
                  <li>
                    <span>Price :</span>
                    <strong class="price">$20</strong>
                  </li>
                  <li>
                    <span>Instructor :</span>
                    <strong>Devon Lane</strong>
                  </li>
                  <li>
                    <span>Duration :</span>
                    <strong>15 Weeks</strong>
                  </li>
                  <li>
                    <span>Lessons :</span>
                    <strong>321</strong>
                  </li>
                  <li>
                    <span>Students :</span>
                    <strong>English</strong>
                  </li>
                  <li>
                    <span>Language :</span>
                    <strong>$20</strong>
                  </li>
                  <li>
                    <span>Certification :</span>
                    <strong>Yes</strong>
                  </li>
                </ul>
                <div class="ep-course__buy-btn">
                  <a href="checkout.html" class="ep-btn"
                    >Buy Now <i class="fi-rs-arrow-small-right"></i>
                  </a>
                </div>
                <div class="ep-course__sidebar-social">
                  <h4 class="ep-course__sidebar-title">
                    Follow On Social Media
                  </h4>
                  <ul>
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
    <!-- End Course Details Area -->
  </main>
@endsection