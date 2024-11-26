
  <!-- Mobile Menu Modal -->
  <div
    class="modal mobile-menu-modal offcanvas-modal fade"
    id="offcanvas-modal"
  >
    <div class="modal-dialog offcanvas-dialog">
      <div class="modal-content">
        <div class="modal-header offcanvas-header">
          <!-- offcanvas-logo-start -->
          <div class="offcanvas-logo">
            <a href="index.html">
              <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" />
            </a>
          </div>
          <!-- offcanvas-logo-end -->
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <i class="fi fi-ss-cross"></i>
          </button>
        </div>
        <div class="mobile-menu-modal-main-body">
          <!-- offcanvas-menu start -->
          <nav id="offcanvas-menu" class="navigation offcanvas-menu">
            <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
              <li>
                <a class="menu-arrow" href="javascript:void(0)">Home</a>
                <ul class="sub-menu">
                  <li>
                    <a class="menu-active" href="index.html">Home One</a>
                  </li>
                  <li>
                    <a href="index-2.html">Home Two</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-arrow" href="javascript:void(0)">Courses</a>
                <ul class="sub-menu">
                  <li>
                    <a href="course.html">Course</a>
                  </li>
                  <li>
                    <a href="course-details.html">Course Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-arrow" href="javascript:void(0)">Events</a>
                <ul class="sub-menu">
                  <li>
                    <a href="event.html">Event</a>
                  </li>
                  <li>
                    <a href="event-details.html">Event Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-arrow" href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li>
                    <a href="about.html">About Us</a>
                  </li>
                  <li>
                    <a href="team.html">Team</a>
                  </li>
                  <li>
                    <a href="team-details.html">Team Details</a>
                  </li>
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="register.html">Register</a>
                  </li>
                  <li>
                    <a href="404.html">404 Error</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-arrow" href="javascript:void(0)">Shop</a>
                <ul class="sub-menu">
                  <li>
                    <a href="shop.html">Shop</a>
                  </li>
                  <li>
                    <a href="shop-single.html">Shop Single</a>
                  </li>
                  <li>
                    <a href="cart.html">Cart</a>
                  </li>
                  <li>
                    <a href="wishlist.html">Wishlist</a>
                  </li>
                  <li>
                    <a href="checkout.html">Checkout</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-arrow" href="javascript:void(0)">Blog</a>
                <ul class="sub-menu">
                  <li>
                    <a href="blog.html">Blog </a>
                  </li>
                  <li>
                    <a href="blog-details.html">Blog Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="{{ route('contact')}}">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- End Mobile Menu Modal -->

  <!-- Start Header Area -->
  <header class="ep-header position-relative section-bg-1">
    <!-- Topbar -->
    <div class="ep-topbar">
      <div class="container ep-container">
        <div class="row align-items-center">
          <div class="col-lg-2 col-6">
            <div class="ep-topbar__column">
              <div class="ep-logo">
                <a href="{{ route('home') }}">
                  <img src="{{ asset('/assets/images/logo.png') }}" alt="logo" style="height: 20%" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-10 col-6">
            <div class="ep-topbar__column ep-topbar__column2">
              <div class="ep-topbar__search-widget">
                {{-- <div class="ep-topbar__category">
                  <select>
                    <option data-display="All">All</option>
                    <option value="1">Study Buddy</option>
                    <option value="2">Tutoring Services</option>
                    <option value="3">Digital Advertising</option>
                    <option value="4">Online Courses</option>
                    <option value="5">Tutoring Services</option>
                  </select>
                </div> --}}
                <div class="ep-topbar__search">
                  <form action="#" method="post">
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
              <a href="{{ route('login') }}" class="ep-header__account">
                <i class="fi fi-rr-user"></i>
                <div class="ep-header__account-info">
                    @auth
                    <span>{{ Auth::user()->name }}</span>
                    @endauth
                    @guest
                    <span>Sign In</span>
                    @endguest
                  {{-- <p>Account</p> --}}
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Middle -->
    <div id="active-sticky" class="ep-header__middle">
      <div class="container ep-container">
        <div class="ep-header__inner">
          <div class="row align-items-center">
            <div class="col-lg-10 col-12">
              <nav class="ep-header__navigation">
                <ul class="ep-header__menu">
                  <li>
                    <a href="{{ route('home') }}">Home 
                      {{-- <i class="fi fi-ss-angle-small-down"></i> --}}
                    </a>
                    {{-- <ul class="sub-menu">
                      <li class="active">
                        <a href="index.html">Home One</a>
                      </li>
                      <li>
                        <a href="index-2.html">Home Two</a>
                      </li>
                    </ul> --}}
                  </li>
                  <li >
                    <a href="{{ route('about') }}">About 
                      <i class="fi fi-ss-angle-small-down"></i>
                    </a>
                    <ul class="sub-menu">
                      <li class="">
                        <a href="/">Department </a>
                      </li>
                      <li>
                        <a href="/">Department Achievements</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="{{ route('courses') }}"
                      >Subjects
                       <i class="fi fi-ss-angle-small-down"></i>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="/">Subject Handlers</a>
                      </li>
                      <li>
                        <a href="/">Study materials</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#"
                      >Events 
                      {{-- <i class="fi fi-ss-angle-small-down"></i> --}}
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('team') }}"
                      >Team
                      <i class="fi fi-ss-angle-small-down"></i>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="{{ route('team') }}">Faculties</a>
                      </li>
                      <li>
                        <a href="{{ route('team') }}">Students</a>
                      </li>
                      <li>
                        <a href="{{ route('team') }}">Alumini</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#"
                      >Activites
                      {{-- <i class="fi fi-ss-angle-small-down"></i> --}}
                    </a>
                    {{-- <ul class="sub-menu">
                      <li>
                        <a href="event.html">Event</a>
                      </li>
                      <li>
                        <a href="event-details.html">Event Details</a>
                      </li>
                    </ul> --}}
                  </li>
                  <li>
                    <a href="#"
                      >Notifications
                      <i class="fi fi-ss-angle-small-down"></i>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="/">Circular</a>
                      </li>
                      <li>
                        <a href="/">Exams</a>
                      </li>
                      <li>
                        <a href="/">Attendance</a>
                      </li>
                    </ul>
                  </li>
                  {{-- <li>
                    <a href="#"
                      >Pages <i class="fi fi-ss-angle-small-down"></i>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="about.html">About Us</a>
                      </li>
                      <li>
                        <a href="team.html">Team</a>
                      </li>
                      <li>
                        <a href="team-details.html">Team Details</a>
                      </li>
                      <li>
                        <a href="login.html">Login</a>
                      </li>
                      <li>
                        <a href="register.html">Register</a>
                      </li>
                      <li>
                        <a href="404.html">404 Error</a>
                      </li>
                    </ul>
                  </li> --}}
                  <li>
                    <a href="{{ route('blog') }}">Blog 
                      {{-- <i class="fi fi-ss-angle-small-down"></i> --}}
                    </a>
                    {{-- <ul class="sub-menu">
                      <li>
                        <a href="blog.html">Blog</a>
                      </li>
                      <li>
                        <a href="blog-details.html">Blog Details</a>
                      </li>
                    </ul> --}}
                  </li>
                  <li>
                    <a href="{{route('contact')}}">Contact</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-12 col-xl-2 col-12">
              <div class="ep-header__left">
                {{-- <div class="ep-topbar__action">
                  <div class="ep-topbar__wishlist">
                    <a href="wishlist.html" class="ep-topbar__action-icon">
                      <i class="fi-rr-heart"></i>
                      <span>4</span>
                    </a>
                  </div>
                  <div class="ep-topbar__cart">
                    <a href="cart.html" class="ep-topbar__action-icon">
                      <i class="fi-rr-shopping-cart"></i>
                      <span>3</span>
                    </a>
                    <div class="ep-topbar__info">
                      <p>Total</p>
                      <span>$496.00</span>
                    </div>
                  </div>
                </div> --}}
                <!-- Mobile Menu Button -->
                <button
                  type="button"
                  class="mobile-menu-offcanvas-toggler"
                  data-bs-toggle="modal"
                  data-bs-target="#offcanvas-modal"
                >
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
                </button>
                <!-- End Mobile Menu Button -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->

  <div id="smooth-wrapper">
    <div id="smooth-content">