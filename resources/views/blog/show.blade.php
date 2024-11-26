@extends('layouts.app')

@section('title', 'Blog Details')

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
              <h3 class="ep-breadcrumbs__title">Blog Details</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('blog-details') }}">Blog Details</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Blog Details Area -->
    <section class="ep-blog__details section-gap position-relative">
      <div class="container ep-container">
        <div class="row">
          <div class="col-lg-12 col-xl-8 col-12">
            <div class="ep-blog__details-main">
              <div class="ep-blog__details-top">
                <span class="ep-blog__details-category">Technology</span>
                <h2 class="ep-blog__details-title">
                  Empowering Children Through Education
                </h2>
                <div class="ep-blog__details-cover">
                  <div class="ep-blog__details-cover-img">
                    <img
                      src="assets/images/blog/details/blog-details-img-1.jpg"
                      alt="blog-img-1"
                    />
                  </div>
                  <div class="ep-blog__details-date">
                    21 September 2022
                  </div>
                  <ul class="ep-blog__details-meta">
                    <li><i class="fi-rr-comments"></i>Comments (05)</li>
                    <li><i class="fi fi-rr-tags"></i>Web design</li>
                  </ul>
                </div>
                <p class="ep-blog__details-text">
                  Aliquam eros justo, posuere loborti viverra laoreet
                  matti ullamcorper posuere viverra .Aliquam eros justo,
                  posuere lobortis, viverra laoreet augue mattis fermentum
                  ullamcorper viverra laoreet Aliquam justo, posuere
                  loborti viverra laoreet matti ullamcorper posuere
                  viverra .Aliquam
                </p>
                <br />
                <p class="ep-blog__details-text">
                  Education is a vital aspect of a child's development.
                  Preschools, elementary schools, and middle schools play
                  a significant role in providing quality education and
                  fostering growth in young
                </p>
              </div>
              <div class="ep-blog__details-widget">
                <h3 class="ep-blog__details-widget-title">
                  Creating a Foundation for Success
                </h3>
                <p class="ep-blog__details-text">
                  Education is a vital aspect of a child's development.
                  Preschools, elementary schools, and middle schools play
                  a significant role in providing quality education and
                  fostering growth in young Education is a vital aspect of
                  a child's development. Preschools, elementary schools,
                  and middle
                </p>
                <br />
                <ul class="ep-blog__details-list">
                  <li>posuere loborti viverra laoreet ullamcorper</li>
                  <li>posuere loborti viverra laoreet ullamcorper</li>
                  <li>
                    lobortis, viverra laoreet augue mattis fermentum
                  </li>
                  <li>
                    lobortis, viverra laoreet augue mattis fermentum
                  </li>
                  <li>posuere loborti viverra laoreet ullamcorper</li>
                  <li>posuere loborti viverra laoreet ullamcorper</li>
                </ul>
                <br />
                <p class="ep-blog__details-text">
                  Aliquam eros justo, posuere loborti viverra laoreet
                  matti ullamcorper posuere viverra .Aliquam eros justo,
                  posuere lobortis, viverra laoreet augue mattis fermentum
                  ullamcorper viverra laoreet Aliquam eros justo, posuere
                  loborti viverra laoreet matti ullamcorper posuere
                  viverra .Aliquam eros justo, posuere lobortis non
                </p>
              </div>
              <!-- Blockquote -->
              <blockquote class="ep-blog__quote">
                <i class="fi fi-rr-quote-right"></i>
                <p>
                  Education is a vital aspect of a child's development.
                  Preschools, elementary schools, and middle schools play
                  a significant role in providing quality education
                </p>
                <span>Sakib Hasan</span>
              </blockquote>
              <div class="ep-blog__details-widget">
                <h3 class="ep-blog__details-widget-title">
                  Little Einsteins Learning School
                </h3>
                <p class="ep-blog__details-text">
                  Education is a vital aspect of a child's development.
                  Preschools, elementary schools, and middle schools play
                  a significant role in providing quality education and
                  fostering growth in young Education is a vital aspect of
                  a child's development. Preschools, elementary schools,
                  and middle
                </p>
                <br />
                <div class="ep-blog__details-widget-img">
                  <img
                    src="assets/images/blog/details/404.html"
                    alt="blog-img-2"
                  />
                </div>
              </div>
              <!-- Blog Details Navigation -->
              <div class="ep-blog__details-navigation">
                <span>By Stanio lainto</span>
                <ul class="ep-blog__navigation-tag">
                  <li>
                    <a href="#">Interiour</a>
                  </li>
                  <li>
                    <a href="#">Ux design</a>
                  </li>
                  <li>
                    <a href="#">Graphics</a>
                  </li>
                </ul>
                <ul class="ep-blog__navigation-social">
                  <li>
                    <a href="#">
                      <img
                        src="assets/images/blog/details/facebook.svg"
                        alt="facebook-icon"
                      />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img
                        src="assets/images/blog/details/pinterest.svg"
                        alt="pinterest-icon"
                      />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img
                        src="assets/images/blog/details/linkedin.svg"
                        alt="linkedin-icon"
                      />
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Blog Details Comments -->
              <div class="ep-blog__details-comment">
                <h3 class="ep-blog__comment-title">2 Comment</h3>
                <!-- Single Comment -->
                <div class="ep-blog__comment-item">
                  <div class="ep-blog__comment-img">
                    <img
                      src="assets/images/blog/details/comment-1.png"
                      alt="comment-img"
                    />
                  </div>
                  <div class="ep-blog__comment-info">
                    <div class="ep-blog__comment-info-head">
                      <h6 class="ep-blog__comment-name">Stanio lainto</h6>
                      <p class="ep-blog__comment-date">
                        January 16, 2024
                      </p>
                    </div>
                    <p class="ep-blog__comment-text">
                      Ished fact that a reader will be distrol acted bioii
                      the.ished fact that a reader will be distrol acted
                      laoreet Aliquam fact that a reader will be distrol
                      acted Aliquam eros justo.
                    </p>
                    <a class="ep-blog__comment-reply">Reply</a>
                  </div>
                </div>
                <!-- Single Comment -->
                <div class="ep-blog__comment-item">
                  <div class="ep-blog__comment-img">
                    <img
                      src="assets/images/blog/details/comment-2.png"
                      alt="comment-img"
                    />
                  </div>
                  <div class="ep-blog__comment-info">
                    <div class="ep-blog__comment-info-head">
                      <h6 class="ep-blog__comment-name">Court Henry</h6>
                      <p class="ep-blog__comment-date">
                        January 16, 2024
                      </p>
                    </div>
                    <p class="ep-blog__comment-text">
                      Ished fact that a reader will be distrol acted bioii
                      the.ished fact that a reader will be distrol acted
                      laoreet Aliquam fact that a reader will be distrol
                      acted Aliquam eros justo.
                    </p>
                    <a class="ep-blog__comment-reply">Reply</a>
                  </div>
                </div>
              </div>
              <!-- Blog Details Form -->
              <div class="ep-blog__details-form">
                <h3 class="ep-blog__details-form-title">
                  Leave a Replay
                </h3>
                <p class="ep-blog__details-form-text">
                  By using form u agree with the message sorage, you can
                  contact us directly now
                </p>
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <input
                          type="text"
                          name="your-name"
                          placeholder="Your Name*"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <input
                          type="email"
                          name="your-email"
                          placeholder="Your E-mail*"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <textarea
                          name="message"
                          placeholder="Write your Message here*"
                          required
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <label
                          class="form-check-label"
                          for="flexCheckDefault"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault"
                          />
                          Save my name email and name and when i next time
                          comment on this website
                        </label>
                      </div>
                      <button type="submit" class="ep-btn">
                        Send Message
                      </button>
                    </div>
                  </div>
                </form>
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
                      <a href="blog-details.html"
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
                      <a href="blog-details.html"
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
                      <a href="blog-details.html"
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
    <!-- End Blog Details Area -->
  </main>
@endsection