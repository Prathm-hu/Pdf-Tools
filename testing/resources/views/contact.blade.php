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
    <meta name="description" content="Shock is a creative multipurpose theme for building websites. It is based on Bootstrap 5 and other of the best and most up-to-date code libraries used by professional developers in the world.">
    <meta name="author" content="Codings">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
  
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
      <nav id="navbar" class="navbar navbar-expand-lg fixed-scroll hover-line-center scheme-1 primary">
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
    <main id="main" class="shock-main">

      <!-- Banner / Collapse / Form -->
      <section class="shock-section has-overlay pb-5">
        <div class="banner">
          <div class="content-wrapper text-center">
            <div class="container">
              <!-- Intro -->
              <div class="extended-intro max-w-75 mb-35">
                <h1 class="title white">
                  <span class="text-1 text-style-2">Request an expert</span>
                  <span class="text-2 text-style-4 text-italic">building a better world.</span>
                </h1>
              </div>
            </div>
          </div>
          <!-- Image -->
          <div class="image-wrapper">
            <img src="assets/images/jpg/a-41.jpg" class="image vh-75 fit-cover" alt="This is an example description for this item." />
          </div>
          <!-- Overlay -->
          <div class="overlay black-50"></div>
        </div>
        <div class="container">
          <div class="row g-4">
            <div class="col-12 col-md-6 align-v-start order-2 order-md-1">
              <!-- Collapse -->
              <div class="collapsible mt-35">
                <div class="collapse-group">
                  <a href="#collapse-1" class="collapse-toggle parent" aria-expanded="true" aria-controls="collapse-1" data-bs-toggle="collapse">
                    <div class="collapse-button rounded gray-25">
                      <span class="arrow-button cross scheme-1 primary">
                        <span class="arrow">
                          <span class="item"></span>
                          <span class="item"></span>
                        </span>
                        <span class="line"></span>
                      </span>
                    </div>
                    <h3 class="title text-style-11 black">
                      Why is this question already showing the answer?
                    </h3>
                  </a>
                  <div id="collapse-1" class="collapse-content collapse show">
                    <p>Because a class called <mark class="animated-underline accent text-black">show</mark> was set in the html and thus it stays open when loading the page.</p>
                    <p>This is certainly useful to keep the most important question and answer highlighted.</p>
                  </div>
                </div>
                <div class="collapse-group">
                  <a href="#collapse-2" class="collapse-toggle parent" aria-expanded="false" aria-controls="collapse-2" data-bs-toggle="collapse">
                    <div class="collapse-button rounded gray-25">
                      <span class="arrow-button cross scheme-1 primary">
                        <span class="arrow">
                          <span class="item"></span>
                          <span class="item"></span>
                        </span>
                        <span class="line"></span>
                      </span>
                    </div>
                    <h3 class="title text-style-11 black">
                      How to make a word have this highlight color?
                    </h3>
                  </a>
                  <div id="collapse-2" class="collapse-content collapse">
                    <p>To get this highlighted text, <mark class="animated-underline accent text-black">just use the html mark tag</mark>, and use a color class. 😃</p>
                    <p>Also works well with <mark class="animated-underline primary-50 text-black">other colors</mark> by adding a color class to the element, but use it sparingly or it may become exaggerated.</p>
                  </div>
                </div>
                <div class="collapse-group">
                  <a href="#collapse-3" class="collapse-toggle parent" aria-expanded="false" aria-controls="collapse-3" data-bs-toggle="collapse">
                    <div class="collapse-button rounded gray-25">
                      <span class="arrow-button cross scheme-1 primary">
                        <span class="arrow">
                          <span class="item"></span>
                          <span class="item"></span>
                        </span>
                        <span class="line"></span>
                      </span>
                    </div>
                    <h3 class="title text-style-11 black">
                      This theme is very beautiful, but is it easy to use?
                    </h3>
                  </a>
                  <div id="collapse-3" class="collapse-content collapse">
                    <p>Yea! 😍</p>
                    <p>This theme was made to make it easier to build any type of website. Also the item support is very friendly and professional.</p>
                    <img src="assets/images/gif/gif.gif" alt="Image name" class="image max-w-50" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
              <div class="holder p-25 climb shadow rounded bg-color white" data-lax="inertia-top">
                <!-- Intro -->
                <div class="basic-intro mb-15">
                  <h2 class="title black">
                    <span class="text-1 text-style-7">How can we </span>
                    <span class="text-2 text-style-8 text-italic typed-text"></span>                  
                  </h2>
                  <!-- Srings -->
                  <div id="typed-strings">
                    <span>talk to you?</span>
                    <span>help your company?</span>
                    <span>show solutions?</span>
                  </div>  
                </div>
                <!-- Form -->
                <div class="form-area scheme-1 primary">
                  <form action="php/sender.php" class="form-fields needs-validation ajax-form" novalidate="novalidate">
                    <div class="form-row row">
                      <div class="form-col form-floating col-12 col-md-6">
                        <input type="text" name="name" id="InputFloatingName" class="form-control" placeholder="Name" required="required">
                        <label for="InputFloatingName" class="form-label">Name</label>
                        <div class="invalid-feedback">Please enter your name.</div>
                        <div class="valid-feedback">Looks good.</div>
                      </div>
                      <div class="form-col form-floating col-12 col-md-6">
                        <input type="email" name="email" id="InputFloatingEmail" class="form-control" placeholder="name@example.com" required="required">
                        <label for="InputFloatingEmail" class="form-label">Email</label>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                        <div class="valid-feedback">Looks good.</div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col form-floating col-12">
                        <textarea name="message" id="InputFloatingMessage" class="form-control form-textarea" rows="3" placeholder="Enter your message (optional)."></textarea>
                        <label for="InputFloatingMessage" class="form-label">Message</label>
                        <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col col-12">
                        <div class="form-check">
                          <input type="radio" name="info" id="InputRadio1" class="form-check-input form-radio" checked="checked" value="I found this site by searching the internet." required="required">
                          <label class="form-label form-check-label" for="InputRadio1">
                            I found this site by searching the internet.
                          </label>
                        </div>
                      </div>
                      <div class="form-col col-12">
                        <div class="form-check">
                          <input type="radio" name="info" id="InputRadio2" class="form-check-input form-radio primary" value="A friend recommended this site to me." required="required">
                          <label class="form-label form-check-label" for="InputRadio2">
                            A friend recommended this site to me.
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col form-floating col-12">
                        <button class="button double-edge transparent primary-hover">
                          <span class="button-text black white-hover">Send message</span>
                          <i class="fa-solid fa-arrow-right button-icon black white-hover"></i>
                          <span class="overlay gray-50 magnetic-effect"></span>
                        </button>
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
      </section>

      <!-- Carousel -->
      <section class="shock-section">
        <div class="container">
          <!-- Carousel -->
          <div class="swiper slider gapped has-gap has-navigation scheme-2 primary" data-columns="8,6,3,2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="assets/images/png/a-1.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-1.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-2.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-2.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-3.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-3.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-4.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-4.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>      
              <div class="swiper-slide">
                <a href="assets/images/png/a-5.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-5.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-6.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-6.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-7.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-7.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-8.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-8.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>      
              <div class="swiper-slide">
                <a href="assets/images/png/a-9.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-9.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-1.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-1.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-2.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-2.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="assets/images/png/a-3.png" class="parent">
                  <div class="image-wrapper hover-opacity">
                    <img src="assets/images/png/a-3.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-button-prev simple"></div>
            <div class="swiper-button-next simple"></div>
          </div>
        </div>
      </section>

      <!-- Card boxed -->
      <section class="shock-section pt-5 pb-5">
        <div class="container">
          <div class="row mb-35">
            <div class="col-12 col-md-8">
              <!-- Intro -->
              <div class="basic-intro">
                <h2 class="title black">
                  <span class="text-1 text-style-5">Expert</span>
                  <span class="text-2 text-style-6 text-italic">service units.</span>
                </h2>
                <div class="description gray">
                  <p>Over many years of work, we have built a very successful history in our area of expertise.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 align-h-right align-v-bottom">
              <!-- Button -->
              <a href="#your-link" class="button double-edge mt-3 transparent primary-hover">
                <span class="button-text black white-hover">Read more</span>
                <i class="fa-solid fa-arrow-right button-icon black white-hover"></i>
                <span class="overlay gray-50 magnetic-effect"></span>
              </a>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-12 col-md-6">
              <div class="card boxed parent">
                <!-- Image -->
                <div class="image-wrapper shadow rounded">
                  <img src="assets/images/jpg/b-34.jpg" alt="Image name" class="image min-vh-50 fit-cover" />
                </div>
                <!-- Box -->
                <div class="card-body box shadow rounded bg-color white">
                  <!-- Label -->
                  <span class="label-vertical outline">
                    <span class="label-line gray"></span>
                    <span class="label-text gray">Las Vegas</span>
                  </span>
                  <!-- Link -->
                  <h3 class="title text-style-11 black">
                    <a href="tel:+19912345678" target="_blank" class="link align-v-center black black-hover hover-up-down">
                      <i class="fa-solid fa-phone icon"></i>
                      <span class="text ms-05">+1 (99) 1234 5678</span>
                      <span class="badge ms-05 primary primary-hover">
                        <span class="badge-text white white-hover">Mon-Sat</span>
                      </span>
                    </a>
                  </h3>
                  <p class="description gray">Our headquarters in Las Vegas works for face-to-face from Monday to Saturday for 24 hours.</p>
                  <div class="list-wrapper align-h-right hover-up-down">
                    <ul class="icon-h-list">
                      <li class="item">
                        <a href="#your-link" target="_blank" class="link black primary-hover hover-rotate"><i class="fa-regular fa-map icon"></i></a>
                      </li>
                      <li class="item">
                        <a href="mailto:contact@mail.com" target="_blank" class="link black primary-hover hover-rotate"><i class="fa-regular fa-envelope icon"></i></a>
                      </li>
                      <li class="item me-0">
                        <a href="https://wa.me/+19912345678?text=Hello..." target="_blank" class="link black primary-hover hover-rotate"><i class="fa-brands fa-whatsapp icon"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card boxed parent">
                <!-- Image -->
                <div class="image-wrapper shadow rounded">
                  <img src="assets/images/jpg/b-35.jpg" alt="Image name" class="image min-vh-50 fit-cover" />
                </div>
                <!-- Box -->
                <div class="card-body box shadow rounded bg-color white">
                  <!-- Label -->
                  <span class="label-vertical outline">
                    <span class="label-line gray"></span>
                    <span class="label-text gray">Spring Valley</span>
                  </span>
                  <!-- Link -->
                  <h3 class="title text-style-11 white">
                    <a href="tel:+19812345678" target="_blank" class="link align-v-center black black-hover hover-up-down">
                      <i class="fa-solid fa-phone icon"></i>
                      <span class="text ms-05">+1 (98) 1234 5678</span>
                      <span class="badge ms-05 primary primary-hover">
                        <span class="badge-text white white-hover">Mon-Fri</span>
                      </span>
                    </a>
                  </h3>
                  <p class="description gray">Our branch in Spring Valley works for face-to-face from Monday to Friday from 10 am to 6 pm.</p>
                  <div class="list-wrapper align-h-right hover-up-down">
                    <ul class="icon-h-list">
                      <li class="item">
                        <a href="#your-link" target="_blank" class="link black primary-hover hover-rotate"><i class="fa-regular fa-map icon"></i></a>
                      </li>
                      <li class="item">
                        <a href="mailto:contact@mail.com" target="_blank" class="link black primary-hover hover-rotate"><i class="fa-regular fa-envelope icon"></i></a>
                      </li>
                      <li class="item me-0">
                        <a href="https://wa.me/+19912345678?text=Hello..." target="_blank" class="link black primary-hover hover-rotate"><i class="fa-brands fa-whatsapp icon"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map -->
      <section class="shock-section">
        <div id="map-canvas-6" class="vh-50"></div>
      </section>

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

    <!-- Google Maps API: https://developers.google.com/maps/get-started -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6s7QK-BWbYB_brkdZU-C1Ex_lwj8SBCw"></script>

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