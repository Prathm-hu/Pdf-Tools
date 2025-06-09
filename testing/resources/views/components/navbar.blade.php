<!DOCTYPE HTML>
<html lang="en">

<!-- Preloader -->
<div id="preloader" class="preloader" data-delay="0" data-limit="3000">
    <img src="assets/images/logo.svg" class="emblem" alt="Emblem" hidden="hidden" />
</div>

<head>
    <!-- Display -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Identity -->
    <title>Shock - Creative Multipurpose Bootstrap 5 Template</title>
    <meta name="description"
        content="Shock is a creative multipurpose theme for building websites. It is based on Bootstrap 5 and other of the best and most up-to-date code libraries used by professional developers in the world.">
    <meta name="author" content="Codings">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/preloader.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-family.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/menu-engine.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/menu-grid.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/dynamic-slider.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/bricklayer.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/lightbox.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/aos.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/core.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body class="shock-body">

    <!-- Header -->
    <header id="header" class="shock-header">
      <!-- Navbar -->
      <nav id="navbar" class="navbar navbar-expand-lg fixed-scroll hover-line-center scheme-1 primary navbar-sticky">
        <div class="container">
          <!-- Brand -->
          <a class="navbar-brand" href="{{ route('index') }}">
                    <!-- <div class="site-title">Site Title</div> -->
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo main-logo" style="height:60px; width:60px;" />
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo sticky-logo" style="height:60px; width:60px;" />
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo mobile-logo" style="height:60px; width:60px;" />
                </a>
          <!-- Responsive menu toggle -->
          <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse" aria-expanded="false">
            <span class="navbar-toggler-icon">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </span>
          </button>
          <!-- Navbar links -->
          <div id="navbar-items" class="collapse navbar-collapse focus-trigger">
            <!-- Responsive search form -->
            <div class="search-bar navbar-collapse-form">
              <div class="form-area d-only-mobile d-none scheme-1">
                <form class="form-fields needs-validation" novalidate="novalidate">
                  <div class="form-row row has-icon">
                    <div class="form-col mb-0 form-floating">
                      <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                      <input id="InputSearchMobile" class="form-control focus-trigger-field" name="InputSearchMobile" placeholder="Type keywords..." required="required">
                      <label for="InputSearchMobile" class="form-label">Type keywords...</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Link -->
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link" href="{{route('index')}}">
                  <span class="text">Home</span>
                </a>
              </li>
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link" href="{{route('about')}}">
                  <span class="text">About Us</span>
                </a>
              </li>
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link " href="{{route('contact')}}">
                  <span class="text">Contact Us</span>
                </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>

    <!-- Main -->
    <main id="main" class="shock-main bg-color gray-10">
         {{ $slot }}

    </main>

    <!-- Scroll to Top -->
    <div class="side-widget to-right invert-color mix-blend-difference">
        <div class="item align-v-bottom">
            <a href="#" class="link hover-up">
                <span class="widget float-icon">
                    <i class="fa-solid fa-arrow-up-long icon"></i>
                </span>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="shock-footer scheme-1 primary">
      <div class="footer-content focus-trigger">
        <div class="container">
          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-item">
                <!-- Brand -->
                <a href="/" class="footer-brand">
                  <!-- <div class="site-title">Site Title</div> -->
                  <img src="assets/images/logo-white.svg" alt="Shock Theme" class="logo" />
                  <span class="logo-after-text">SHOCK</span>
                </a>
                <!-- Text -->
                <div class="footer-text">
                  <p>Shock is a creative multipurpose theme for building websites.</p>
                </div>
              </div>
              <div class="footer-item">
                <!-- Icon list -->
                <div class="list-wrapper">
                  <ul class="icon-h-list">
                    <li class="item ms-0">
                      <a href="#" class="link gray primary-hover hover-rotate"><i class="icon fab fa-facebook-f"></i></a>
                    </li>
                    <li class="item">
                      <a href="#" class="link gray primary-hover hover-rotate"><i class="icon fab fa-twitter"></i></a>
                    </li>
                    <li class="item">
                      <a href="#" class="link gray primary-hover hover-rotate"><i class="icon fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="footer-item">
                <!-- Button -->
                <div class="hover-up-down">
                  <a href="tel:+19912345678" class="button outline rounded gray primary-hover">
                    <i class="fa-solid fa-phone button-icon left-icon gray white-hover"></i>
                    <span class="button-text gray white-hover">+1 (99) 1234 5678</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-item">
                <h6 class="title">Quick Links</h6>
                <!-- Links list -->
                <ul class="nav-list list-unstyled">
                  <li class="nav-item">
                    <a href="{{route('privacy')}}" class="nav-link">
                      <span class="text">Privacy Policy</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">
                      <span class="text">About Us</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link">
                      <span class="text">Contact Us</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('terms')}}" class="nav-link">
                      <span class="text">Terms And Condition</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-item">
                <h6 class="title">Popular Searches</h6>
                <!-- Tag Cloud -->
                <div class="tag-cloud">
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Environment</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover floating-item-smooth">
                      <span class="badge-text gray white-hover">Events</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Technology</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Web</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Mobile</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Design</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Branding</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Development</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Artificial</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Intelligence</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Engineering</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Innovation</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Social</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Fashion</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">                      
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Product</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-item">
                <h6 class="title">Susbcribe</h6>
                <!-- Text -->
                <div class="footer-text">
                  <p>Subscribe to our newsletter and stay up to date with what's happening in the world.</p>
                  <p>By submitting this form you agree to the <a href="#" class="link gray primary-hover"><u>terms of use</u>.</a></p>
                </div>
                <!-- Form -->
                <div class="form-area scheme-2">
                  <form action="php/sender.php" class="form-fields needs-validation ajax-form" novalidate="novalidate">
                    <div class="form-row row has-icon">
                      <div class="form-col form-floating">
                        <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                        <input type="email" name="email" id="InputFloatingFooter" class="form-control focus-trigger-field" placeholder="Type your email..." required="required">
                        <label for="InputFloatingFooter" class="form-label">Type your email...</label>
                      </div>
                    </div>
                    <input type="hidden" name="subject" value="Message sent through the contact form.">
                    <span class="form-alert success">Your message was sent successful. Thanks.</span>
                    <span class="form-alert error">Sorry. We were unable to send your message.</span>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-bar">
        <div class="text">© 2023 - All rights reserved. The <a href="https://codings.dev?redirect=shock-html" class="link gray primary-hover"><u>Shock Theme</u></a> is developed and maintained by <a href="https://codings.dev?ref=shock-html" class="link gray primary-hover"><u>Codings Group</u></a>.</div>
      </div>
    </footer>

    <!-- Vendor JavaScript -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/preloader.min.js"></script>
    <script src="assets/js/vendor/inview.min.js"></script>
    <script src="assets/js/vendor/menu-engine.min.js"></script>
    <script src="assets/js/vendor/menu-grid.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/swiper.min.js"></script>
    <script src="assets/js/vendor/anime.min.js"></script>
    <script src="assets/js/vendor/dynamic-slider.min.js"></script>
    <script src="assets/js/vendor/shuffle.min.js"></script>
    <script src="assets/js/vendor/stickybits.min.js"></script>
    <script src="assets/js/vendor/bricklayer.min.js"></script>
    <script src="assets/js/vendor/lightbox.min.js"></script>
    <script src="assets/js/vendor/typed.min.js"></script>
    <script src="assets/js/vendor/progressbar.min.js"></script>
    <script src="assets/js/vendor/map-styles.min.js"></script>
    <script src="assets/js/vendor/magnetic-effect.min.js"></script>
    <script src="assets/js/vendor/gsap.min.js"></script>
    <script src="assets/js/vendor/aos.min.js"></script>
    <script src="assets/js/vendor/lax.min.js"></script>
    <script src="assets/js/vendor/cursor-effect.min.js"></script>

    <!-- Main JavaScript -->
    <script src="assets/js/main.js"></script>

</body>

</html>
