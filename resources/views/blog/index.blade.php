@extends('layouts.app')

@section('title', ' Enigma Blogs')

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
              <h3 class="ep-breadcrumbs__title">Blog</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('blog') }}">Blog</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Blog Area -->
    <section class="ep-blog-page section-gap position-relative">
      <div class="container ep-container">
        <div class="row">
          <div class="col-lg-12 col-xl-8 col-12">
            <div class="ep-blog__list">
              <!-- Single Blog -->
              <div class="ep-blog__card ep-blog__card--style2">
                <a href="{{ route('blog-details') }}" class="ep-blog__img">
                  <img
                    src="assets/images/blog/blog-1/4.png"
                    alt="blog-img"
                  />
                </a>
                <div class="ep-blog__info">
                  <div class="ep-blog__date">5 January 2024</div>
                  <div class="ep-blog__content">
                    <div class="ep-blog__meta">
                      <ul>
                        <li>
                          <i class="fi-rr-comments"></i>Comments (05)
                        </li>
                        <li>
                          <a href="#">
                            <i class="fi-rr-user"></i>By admin
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a href="{{ route('blog-details') }}" class="ep-blog__title">
                      <h5 class="m-0">
                        Lifelong Learning Endless was Possibilities
                      </h5>
                    </a>
                    <div class="ep-blog__btn">
                      <a href="{{ route('blog-details') }}"
                        >Read More
                        <i class="fi fi-rs-arrow-small-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Blog -->
              <div class="ep-blog__card ep-blog__card--style2">
                <a href="{{ route('blog-details') }}" class="ep-blog__img">
                  <img
                    src="assets/images/blog/blog-1/2.png"
                    alt="blog-img"
                  />
                </a>
                <div class="ep-blog__info">
                  <div class="ep-blog__date">5 January 2024</div>
                  <div class="ep-blog__content">
                    <div class="ep-blog__meta">
                      <ul>
                        <li>
                          <i class="fi-rr-comments"></i>Comments (05)
                        </li>
                        <li>
                          <a href="#">
                            <i class="fi-rr-user"></i>By admin
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a href="{{ route('blog-details') }}" class="ep-blog__title">
                      <h5 class="m-0">
                        Foundation for a better most tomorrow design
                      </h5>
                    </a>
                    <div class="ep-blog__btn">
                      <a href="{{ route('blog-details') }}"
                        >Read More
                        <i class="fi fi-rs-arrow-small-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Blog -->
              <div class="ep-blog__card ep-blog__card--style2">
                <a href="{{ route('blog-details') }}" class="ep-blog__img">
                  <img
                    src="assets/images/blog/blog-1/3.png"
                    alt="blog-img"
                  />
                </a>
                <div class="ep-blog__info">
                  <div class="ep-blog__date">5 January 2024</div>
                  <div class="ep-blog__content">
                    <div class="ep-blog__meta">
                      <ul>
                        <li>
                          <i class="fi-rr-comments"></i>Comments (05)
                        </li>
                        <li>
                          <a href="#">
                            <i class="fi-rr-user"></i>By admin
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a href="{{ route('blog-details') }}" class="ep-blog__title">
                      <h5 class="m-0">
                        Empowering Students designer is Transforming Lives
                      </h5>
                    </a>
                    <div class="ep-blog__btn">
                      <a href="{{ route('blog-details') }}"
                        >Read More
                        <i class="fi fi-rs-arrow-small-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Blog -->
              <div class="ep-blog__card ep-blog__card--style2">
                <a href="{{ route('blog-details') }}" class="ep-blog__img">
                  <img
                    src="assets/images/blog/blog-1/4.png"
                    alt="blog-img"
                  />
                </a>
                <div class="ep-blog__info">
                  <div class="ep-blog__date">5 January 2024</div>
                  <div class="ep-blog__content">
                    <div class="ep-blog__meta">
                      <ul>
                        <li>
                          <i class="fi-rr-comments"></i>Comments (05)
                        </li>
                        <li>
                          <a href="#">
                            <i class="fi-rr-user"></i>By admin
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a href="{{ route('blog-details') }}" class="ep-blog__title">
                      <h5 class="m-0">
                        Wonderworks Child Develop Center Learning Safari
                        Preschool
                      </h5>
                    </a>
                    <div class="ep-blog__btn">
                      <a href="{{ route('blog-details') }}"
                        >Read More
                        <i class="fi fi-rs-arrow-small-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                  <li>
                    <a href="#">
                      <i class="fi-rr-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 col-md-8 col-12">
            <div class="ep-blog__sidebar">
              <!-- Single Sidebar Widget -->
              <div class="ep-blog__sidebar-widget">
                <h4 class="ep-blog__sidebar-title">Search</h4>
                <form
                  action="#"
                  method="post"
                  class="ep-blog__sidebar-search"
                >
                  <input
                    type="search"
                    name="search"
                    placeholder="Search...."
                    required
                  />
                  <button type="submit">
                    <i class="fi-rr-search"></i>
                  </button>
                </form>
              </div>
              <!-- Single Sidebar Widget -->
              <div class="ep-blog__sidebar-widget">
                <h4 class="ep-blog__sidebar-title">About Me</h4>
                <div class="ep-blog__sidebar-about">
                  <div class="ep-blog__about-img">
                    <img
                      src="assets/images/blog/sidebar/about-img.png"
                      alt="about-img"
                    />
                  </div>
                  <div class="ep-blog__about-info">
                    <h6>Stanio lainto smarle</h6>
                    <p>
                      Aliquam eros justo, posuere loborti viverra
                      ullamcorper posuere
                    </p>
                  </div>
                  <div class="ep-blog__about-social">
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
              <!-- Single Sidebar Widget -->
              <div class="ep-blog__sidebar-widget">
                <h4 class="ep-blog__sidebar-title">Category</h4>
                <div class="ep-blog__sidebar-category">
                  <ul>
                    <li>
                      <a href="#">Learning <span>(02)</span> </a>
                    </li>
                    <li>
                      <a href="#"
                        >Einsteins Learning School <span>(05)</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">Kids Preschool <span>(10)</span> </a>
                    </li>
                    <li>
                      <a href="#">Learning Academy <span>(03)</span> </a>
                    </li>
                    <li>
                      <a href="#"
                        >Hoppers Kinderland <span>(10)</span>
                      </a>
                    </li>
                    <li>
                      <a href="#"
                        >Sparkling Stars Preschool <span>(03)</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Single Sidebar Widget -->
              <div class="ep-blog__sidebar-widget">
                <h4 class="ep-blog__sidebar-title">Latest Blogs</h4>
                <div class="ep-blog__latest">
                  <!-- Single Latest -->
                  <div class="ep-blog__latest-item">
                    <div class="ep-blog__latest-info">
                      <span>
                        <i class="fi-rr-calendar"></i>Jan 10,2022
                      </span>
                      <a href="{{ route('blog-details') }}"
                        >Sparkling Stars the Preschool</a
                      >
                    </div>
                    <div class="ep-blog__latest-img">
                      <img
                        src="assets/images/blog/sidebar/latest-1.png"
                        alt="blog-img"
                      />
                    </div>
                  </div>
                  <!-- Single Latest -->
                  <div class="ep-blog__latest-item">
                    <div class="ep-blog__latest-info">
                      <span>
                        <i class="fi-rr-calendar"></i>Jan 10,2022
                      </span>
                      <a href="{{ route('blog-details') }}"
                        >Explorin Elementary School main</a
                      >
                    </div>
                    <div class="ep-blog__latest-img">
                      <img
                        src="assets/images/blog/sidebar/latest-2.png"
                        alt="blog-img"
                      />
                    </div>
                  </div>
                  <!-- Single Latest -->
                  <div class="ep-blog__latest-item">
                    <div class="ep-blog__latest-info">
                      <span>
                        <i class="fi-rr-calendar"></i>Jan 10,2022
                      </span>
                      <a href="{{ route('blog-details') }}"
                        >Discovery Kids most Preschool</a
                      >
                    </div>
                    <div class="ep-blog__latest-img">
                      <img
                        src="assets/images/blog/sidebar/latest-3.png"
                        alt="blog-img"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Sidebar Widget -->
              <div class="ep-blog__sidebar-widget">
                <h4 class="ep-blog__sidebar-title">Archive</h4>
                <div class="ep-blog__archive">
                  <h6>Get On line <span>Courses</span></h6>
                  <p>
                    Education is a vital aspect of a child's development,
                    and middle
                  </p>
                  <a href="#" class="ep-btn"
                    >Start Now <i class="fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
              <!-- Single Sidebar Widget -->
              <div class="ep-blog__sidebar-widget">
                <h4 class="ep-blog__sidebar-title">Tags</h4>
                <div class="ep-blog__tags">
                  <ul>
                    <li>
                      <a href="#">Preschool</a>
                    </li>
                    <li>
                      <a href="#">Learning </a>
                    </li>
                    <li>
                      <a href="#">Kids</a>
                    </li>
                    <li>
                      <a href="#">Preschool</a>
                    </li>
                    <li>
                      <a href="#">School</a>
                    </li>
                    <li>
                      <a href="#">Academy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Area -->
  </main>
@endsection