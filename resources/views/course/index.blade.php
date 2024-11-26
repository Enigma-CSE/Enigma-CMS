@extends('layouts.app')

@section('title', 'Subjects')

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
              <h3 class="ep-breadcrumbs__title">Course</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('courses') }}">Course</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Course Area -->
    <section class="ep-course section-gap position-relative">
      <div class="container ep-container">
        <div class="ep-course__filter">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="ep-course__result">
                <h3 class="ep-course__result-title">Showing</h3>
                <span class="ep-course__result-data">1-6/100</span>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="ep-course__search">
                <div class="ep-course__select">
                  <select>
                    <option value="1">100 courses</option>
                    <option value="2">200 courses</option>
                    <option value="3">300 courses</option>
                  </select>
                </div>
                <form
                  action="/"
                  method="post"
                  class="ep-course__search-form"
                >
                  <input
                    type="search"
                    name="search"
                    placeholder="Search"
                    required
                  />
                  <button type="submit">
                    <i class="fi-rr-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Single Course Card -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-course__card wow fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration="1s"
            >
              <a href="{{ route('course-details') }}" class="ep-course__img">
                <img
                  src="assets/images/course/course-1/1.png"
                  alt="course-img"
                />
              </a>
              <a href="{{ route('courses') }}" class="ep-course__tag ep1-bg">Math</a>
              <div class="ep-course__body">
                <div class="ep-course__lesson">
                  <div class="ep-course__student">
                    <i class="fi-rr-user"></i>
                    <p>250 Student</p>
                  </div>
                  <div class="ep-course__teacher">
                    <p>Steve Smith</p>
                  </div>
                </div>
                <div class="ep-course__rattings">
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
                      <i class="icofont-star off-color"></i>
                    </li>
                    <li>
                      <span>(5.0/ 2 Ratings)</span>
                    </li>
                  </ul>
                </div>
                <a href="{{ route('course-details') }}" class="ep-course__title">
                  <h5>World History: Ancient to Modern Times</h5>
                </a>
                <div class="ep-course__bottom">
                  <a href="{{ route('course-details') }}" class="ep-course__btn"
                    >Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                  <span class="ep-course__price">$50.00</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Course Card -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-course__card wow fadeInUp"
              data-wow-delay=".5s"
              data-wow-duration="1s"
            >
              <a href="{{ route('course-details') }}" class="ep-course__img">
                <img
                  src="assets/images/course/course-1/2.png"
                  alt="course-img"
                />
              </a>
              <a href="{{ route('courses') }}" class="ep-course__tag ep2-bg">Math</a>
              <div class="ep-course__body">
                <div class="ep-course__lesson">
                  <div class="ep-course__student">
                    <i class="fi-rr-user"></i>
                    <p>250 Student</p>
                  </div>
                  <div class="ep-course__teacher">
                    <p>Steve Smith</p>
                  </div>
                </div>
                <div class="ep-course__rattings">
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
                      <i class="icofont-star off-color"></i>
                    </li>
                    <li>
                      <span>(5.0/ 2 Ratings)</span>
                    </li>
                  </ul>
                </div>
                <a href="{{ route('course-details') }}" class="ep-course__title">
                  <h5>Environmental Science and Sustainability</h5>
                </a>
                <div class="ep-course__bottom">
                  <a href="{{ route('course-details') }}" class="ep-course__btn"
                    >Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                  <span class="ep-course__price">$50.00</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Course Card -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-course__card wow fadeInUp"
              data-wow-delay=".7s"
              data-wow-duration="1s"
            >
              <a href="{{ route('course-details') }}" class="ep-course__img">
                <img
                  src="assets/images/course/course-1/3.png"
                  alt="course-img"
                />
              </a>
              <a href="{{ route('courses') }}" class="ep-course__tag ep4-bg">Math</a>
              <div class="ep-course__body">
                <div class="ep-course__lesson">
                  <div class="ep-course__student">
                    <i class="fi-rr-user"></i>
                    <p>250 Student</p>
                  </div>
                  <div class="ep-course__teacher">
                    <p>Steve Smith</p>
                  </div>
                </div>
                <div class="ep-course__rattings">
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
                      <i class="icofont-star off-color"></i>
                    </li>
                    <li>
                      <span>(5.0/ 2 Ratings)</span>
                    </li>
                  </ul>
                </div>
                <a href="{{ route('course-details') }}" class="ep-course__title">
                  <h5>Modern Physics: Concepts and Applications</h5>
                </a>
                <div class="ep-course__bottom">
                  <a href="{{ route('course-details') }}" class="ep-course__btn"
                    >Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                  <span class="ep-course__price">$50.00</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Course Card -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-course__card wow fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration="1s"
            >
              <a href="{{ route('course-details') }}" class="ep-course__img">
                <img
                  src="assets/images/course/course-1/4.png"
                  alt="course-img"
                />
              </a>
              <a href="{{ route('courses') }}" class="ep-course__tag ep7-bg">Math</a>
              <div class="ep-course__body">
                <div class="ep-course__lesson">
                  <div class="ep-course__student">
                    <i class="fi-rr-user"></i>
                    <p>250 Student</p>
                  </div>
                  <div class="ep-course__teacher">
                    <p>Steve Smith</p>
                  </div>
                </div>
                <div class="ep-course__rattings">
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
                      <i class="icofont-star off-color"></i>
                    </li>
                    <li>
                      <span>(5.0/ 2 Ratings)</span>
                    </li>
                  </ul>
                </div>
                <a href="{{ route('course-details') }}" class="ep-course__title">
                  <h5>Early Childhood Education Practices</h5>
                </a>
                <div class="ep-course__bottom">
                  <a href="{{ route('course-details') }}" class="ep-course__btn"
                    >Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                  <span class="ep-course__price">$50.00</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Course Card -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-course__card wow fadeInUp"
              data-wow-delay=".5s"
              data-wow-duration="1s"
            >
              <a href="{{ route('course-details') }}" class="ep-course__img">
                <img
                  src="assets/images/course/course-1/5.png"
                  alt="course-img"
                />
              </a>
              <a href="{{ route('courses') }}" class="ep-course__tag ep4-bg">Math</a>
              <div class="ep-course__body">
                <div class="ep-course__lesson">
                  <div class="ep-course__student">
                    <i class="fi-rr-user"></i>
                    <p>250 Student</p>
                  </div>
                  <div class="ep-course__teacher">
                    <p>Steve Smith</p>
                  </div>
                </div>
                <div class="ep-course__rattings">
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
                      <i class="icofont-star off-color"></i>
                    </li>
                    <li>
                      <span>(5.0/ 2 Ratings)</span>
                    </li>
                  </ul>
                </div>
                <a href="{{ route('course-details') }}" class="ep-course__title">
                  <h5>Embrace the power of better tomorrow education</h5>
                </a>
                <div class="ep-course__bottom">
                  <a href="{{ route('course-details') }}" class="ep-course__btn"
                    >Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                  <span class="ep-course__price">$50.00</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Course Card -->
          <div class="col-lg-6 col-xl-4 col-md-6 col-12">
            <div
              class="ep-course__card wow fadeInUp"
              data-wow-delay=".7s"
              data-wow-duration="1s"
            >
              <a href="{{ route('course-details') }}" class="ep-course__img">
                <img
                  src="assets/images/course/course-1/6.png"
                  alt="course-img"
                />
              </a>
              <a href="{{ route('courses') }}" class="ep-course__tag ep3-bg">Math</a>
              <div class="ep-course__body">
                <div class="ep-course__lesson">
                  <div class="ep-course__student">
                    <i class="fi-rr-user"></i>
                    <p>250 Student</p>
                  </div>
                  <div class="ep-course__teacher">
                    <p>Steve Smith</p>
                  </div>
                </div>
                <div class="ep-course__rattings">
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
                      <i class="icofont-star off-color"></i>
                    </li>
                    <li>
                      <span>(5.0/ 2 Ratings)</span>
                    </li>
                  </ul>
                </div>
                <a href="{{ route('course-details') }}" class="ep-course__title">
                  <h5>Basic Programming with Python</h5>
                </a>
                <div class="ep-course__bottom">
                  <a href="{{ route('course-details') }}" class="ep-course__btn"
                    >Enroll Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                  <span class="ep-course__price">$50.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="ep-pagination">
              <ul class="ep-pagination__list">
                <li>
                  <a href="#">01</a>
                </li>
                <li class="active">
                  <a href="#">02</a>
                </li>
                <li>
                  <a href="#">03</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Course Area -->
  </main>
@endsection