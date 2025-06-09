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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional for icons) -->
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

    <!-- Popup Bar -->
    <div id="popup-bar" class="popup-bar bg-gradient scheme-1 shadow d-none">
        <p class="description white-85">Don't miss this offer! It's for a limited time. 🥳</p>
        <a href="https://codings.dev/?buy=shock-html" target="_blank" class="button simple">
            <span class="button-text white white-hover"><mark class="animated-underline tertiary active">Save
                    Now</mark></span>
            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
        </a>
        <button id="popup-bar-dismiss" class="button close-button">
            <i class="fa-solid fa-xmark button-icon white tertiary-hover"></i>
        </button>
    </div>

    <!-- Header -->
    <header id="header" class="shock-header">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-scroll hover-line-center scheme-1 primary">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <!-- <div class="site-title">Site Title</div> -->
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo main-logo"
                        style="height:60px; width:60px;" />
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo sticky-logo"
                        style="height:60px; width:60px;" />
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo mobile-logo"
                        style="height:60px; width:60px;" />
                </a>
                <!-- Responsive menu toggle -->
                <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse"
                    aria-expanded="false">
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
                                        <button class="button overlay-button"><img class="overlay-image-icon"
                                                src="assets/svg/send-outline.svg" alt="Icon name"
                                                data-shock-icon="32" /></button>
                                        <input id="InputSearchMobile" class="form-control focus-trigger-field"
                                            name="InputSearchMobile" placeholder="Type keywords..."
                                            required="required">
                                        <label for="InputSearchMobile" class="form-label">Type keywords...</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Link -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown has-megamenu hover">
                            <a class="nav-link" href="{{ route('index') }}">
                                <span class="text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-megamenu hover">
                            <a class="nav-link" href="{{ route('about') }}">
                                <span class="text">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-megamenu hover">
                            <a class="nav-link " href="{{ route('contact') }}">
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

        <!-- Slider -->
        <section class="shock-section has-overlay">
            <div class="swiper slider has-navigation scheme-2 primary" data-columns="1,1,1,1" data-loop="true">

                <div class="banner">
                    <div class="content-wrapper">
                        <!-- Intro -->
                        <div class="basic-intro max-w-75 text-center">
                            <h1 class="title white mb-5">
                                <span class="text-1 d-block text-style-4">All tools you need in one place. </span>
                            </h1>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="image-wrapper">
                        <img src="assets/images/jpg/a-28.jpg" class="image vh-75 fit-cover"
                            alt="This is an example description for this item." />
                    </div>
                    <!-- Overlay -->
                    <div class="overlay opacity-75" data-bg-color="#264653"></div>
                </div>
            </div>
        </section>

        <!-- Counter -->
        {{-- <section class="shock-section pb-5" data-lax="inertia-top">
            <div class="container max-w-85">
                <div class="holder p-25 climb shadow rounded bg-color white">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <!-- Counter -->
                            <div class="animated-counter">
                                <div class="item text-center">
                                    <div class="counter text-style-5 text-outline" data-value="74" data-symbol=""
                                        data-duration="2500" data-text-bg-color="transparent"
                                        data-text-color="var(--gray-color)"></div>
                                    <h3 class="title text-style-11 black">Services Performed</h3>
                                    <p class="description">Always with great dedication we work on the project as if it
                                        were for ourselves.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <!-- Counter -->
                            <div class="animated-counter">
                                <div class="item text-center">
                                    <div class="counter text-style-5 text-outline" data-value="256" data-symbol=""
                                        data-duration="2500" data-text-bg-color="transparent"
                                        data-text-color="var(--gray-color)"></div>
                                    <h3 class="title text-style-11 black">Created Designs</h3>
                                    <p class="description">We love to create new things and that allows us to do
                                        everything with pleasure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <!-- Counter -->
                            <div class="animated-counter">
                                <div class="item text-center">
                                    <div class="counter text-style-5 text-outline" data-value="138" data-symbol=""
                                        data-duration="2500" data-text-bg-color="transparent"
                                        data-text-color="var(--gray-color)"></div>
                                    <h3 class="title text-style-11 black">Satisfied Customers</h3>
                                    <p class="description">People recommend our services because we exceed quality
                                        standards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Scrolling text -->
        {{-- <section class="shock-section">
            <div class="scrolling-text">
                <!-- Text -->
                <div class="text-wrapper mix-blend-lighter">
                    <h2 class="text text-style-2 text-italic gray-25" data-lax="h-left">We provide our art to ensure
                        that human insights work well</h2>
                    <h3 class="text text-style-8 gray-50" data-lax="h-right">ensure that human insights work well
                        together with technology, brand and business, with a focus on fast and assertive results</h3>
                </div>
            </div>
        </section> --}}

        <!-- Carousel -->
        {{-- <section class="shock-section pt-5 pb-5">
            <div class="container">
                <!-- Carousel -->
                <div class="gallery swiper slider stretched has-gap has-side-gaps has-pagination scheme-1 primary"
                    data-columns="2,1,1,1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="assets/images/jpg/a-30.jpg" class="item lightbox-link hover-zoom">
                                <div class="image-wrapper small-shadow rounded-3">
                                    <img src="assets/images/jpg/a-30.jpg" class="image"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <!-- Video -->
                            <a href="https://vimeo.com/222990241" class="item active lightbox-link hover-zoom">
                                <i class="fa-solid fa-circle-play gallery-icon white"></i>
                                <div class="image-wrapper small-shadow rounded-3">
                                    <img src="assets/images/jpg/a-31.jpg" class="image"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/jpg/a-32.jpg" class="item lightbox-link hover-zoom">
                                <div class="image-wrapper small-shadow rounded-3">
                                    <img src="assets/images/jpg/a-32.jpg" class="image"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/jpg/a-30.jpg" class="item lightbox-link hover-zoom">
                                <div class="image-wrapper small-shadow rounded-3">
                                    <img src="assets/images/jpg/a-30.jpg" class="image"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <!-- Video -->
                            <a href="https://vimeo.com/222990241" class="item active lightbox-link hover-zoom">
                                <i class="fa-solid fa-circle-play gallery-icon white"></i>
                                <div class="image-wrapper small-shadow rounded-3">
                                    <img src="assets/images/jpg/a-31.jpg" class="image"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/jpg/a-32.jpg" class="item lightbox-link hover-zoom">
                                <div class="image-wrapper small-shadow rounded-3">
                                    <img src="assets/images/jpg/a-32.jpg" class="image"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-side-gaps-prev" data-bg-color="#f4f4f6"></div>
                    <div class="swiper-side-gaps-next" data-bg-color="#f4f4f6"></div>
                </div>
            </div>
        </section> --}}

        <!-- Card -->
        <section class="shock-section pb-5 mt-5">
            <div class="container">
                <div class="row mb-35">
                    <div class="col-12 col-md-8">
                        <!-- Intro -->
                        <div class="basic-intro">
                            <h2 class="title black">
                                <span class="text-1 text-style-7 text-italic">We seek </span>
                                <span class="text-2 text-style-8">the extraordinary.</span>
                            </h2>
                            <div class="description gray">
                                <p>Our vision is to have our product recognized as the main player in the market and
                                    become a reference for other people and companies that intend to venture into the
                                    segment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 align-h-right align-v-bottom">
                        <!-- Button -->
                        <a href="#your-link"
                            class="button mt-3 small-shadow rounded-pill primary black-hover hover-up-down">
                            <span class="button-text white white-hover">Get Started</span>
                            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                        </a>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div
                                class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-info fs-2"><i class="bi bi-files"></i></div>
                                <h3 class="title text-style-11 black">Merge PDF</h3>
                                <p class="description flex-grow-1">Combine multiple PDF files into a single document
                                    easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover"><mark
                                                class="animated-underline accent when-hover">Merge Now</mark></span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('mergePdf.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div
                                class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-secondary fs-2"><i class="bi bi-file-earmark-image"></i></div>
                                <h3 class="title text-style-11 black">JPG to PDF</h3>
                                <p class="description flex-grow-1">Convert your JPG images into a single PDF document
                                    easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover"><mark
                                                class="animated-underline accent when-hover">Convert Now</mark></span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('jpgToPdf.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div
                                class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-danger fs-2"><i class="bi bi-water"></i></div>
                                <h3 class="title text-style-11 black">Watermark PDF</h3>
                                <p class="description flex-grow-1">Add custom watermarks to your PDF files quickly and
                                    easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover"><mark
                                                class="animated-underline accent when-hover">Add
                                                Watermark</mark></span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('watermarkPdf.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div
                                class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-success fs-2"><i class="bi bi-arrow-repeat"></i></div>
                                <h3 class="title text-style-11 black">Rotate PDF</h3>
                                <p class="description flex-grow-1">Easily rotate pages in your PDF documents as needed.
                                </p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover"><mark
                                                class="animated-underline accent when-hover">Rotate Now</mark></span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('pdfRotate.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div
                                class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-primary fs-2"><i class="bi bi-file-word"></i></div>
                                <h3 class="title text-style-11 black">Add Page Numbers</h3>
                                <p class="description flex-grow-1">Easily add page numbers to your PDF documents for
                                    better organization.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover"><mark
                                                class="animated-underline accent when-hover">Add Numbers</mark></span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('pdfPage.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-warning fs-2"><i class="bi bi-filetype-json"></i></div>
                                <h3 class="title text-style-11 black">JSON to HTML</h3>
                                <p class="description flex-grow-1">Convert your JSON data into formatted HTML easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">Convert Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('json.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-warning fs-2"><i class="bi bi-file-earmark-spreadsheet"></i></div>
                                <h3 class="title text-style-11 black">JSON to Excel</h3>
                                <p class="description flex-grow-1">Convert your JSON data into Excel (XLSX) format easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">Convert Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('jsonToExcel.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-warning fs-2"><i class="bi bi-file-earmark-text"></i></div>
                                <h3 class="title text-style-11 black">JSON to PDF</h3>
                                <p class="description flex-grow-1">Convert your JSON data into a formatted PDF document easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">Convert Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('jsonToPdf.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-info fs-2"><i class="bi bi-file-earmark-text"></i></div>
                                <h3 class="title text-style-11 black">Text to PDF</h3>
                                <p class="description flex-grow-1">Convert your plain text files into a PDF document easily.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">Convert Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('txtToPdf.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-success fs-2"><i class="bi bi-eye"></i></div>
                                <h3 class="title text-style-11 black">JSON Viewer</h3>
                                <p class="description flex-grow-1">View and format your JSON data in a readable way.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">View Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('jsonViewer.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-success fs-2"><i class="bi bi-table"></i></div>
                                <h3 class="title text-style-11 black">JSON Table</h3>
                                <p class="description flex-grow-1">Convert your JSON data into a formatted HTML table for easy viewing.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">Convert Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('jsonToTable.form') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="card has-icon hover-up parent flex-fill h-100">
                            <div class="card-body rounded-3 small-shadow text-center bg-color white d-flex flex-column h-100">
                                <div class="mb-2 text-success fs-2"><i class="bi bi-code-slash"></i></div>
                                <h3 class="title text-style-11 black">Code Formatter</h3>
                                <p class="description flex-grow-1">Format and beautify your code for better readability.</p>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center">
                                    <span class="button simple">
                                        <span class="button-text black black-hover">
                                            <mark class="animated-underline accent when-hover">Format Now</mark>
                                        </span>
                                        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                    </span>
                                </div>
                                <!-- Link -->
                                <a href="{{ route('formatter') }}" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card boxed -->
        {{-- <section class="shock-section pt-5 pb-5 bg-color white">
            <div class="container">
                <div class="row mb-35">
                    <div class="col-12 col-md-8">
                        <!-- Intro -->
                        <div class="basic-intro">
                            <h2 class="title black">
                                <span class="text-1 text-style-7 text-italic">Expert </span>
                                <span class="text-2 text-style-8">service units.</span>
                            </h2>
                            <div class="description gray">
                                <p>Over many years of work, we have built a very successful history in our area of
                                    expertise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 align-h-right align-v-bottom">
                        <!-- Button -->
                        <a href="#your-link"
                            class="button mt-3 shadow rounded-pill primary black-hover hover-up-down">
                            <span class="button-text white white-hover">Read More</span>
                            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <div class="card boxed parent">
                            <!-- Image -->
                            <div class="image-wrapper shadow rounded">
                                <img src="assets/images/jpg/b-34.jpg" alt="Image name"
                                    class="image min-vh-50 fit-cover" />
                            </div>
                            <!-- Box -->
                            <div class="card-body box shadow rounded" data-bg-color="#264653">
                                <!-- Label -->
                                <span class="label-vertical outline">
                                    <span class="label-line gray"></span>
                                    <span class="label-text gray">Las Vegas</span>
                                </span>
                                <!-- Link -->
                                <h3 class="title text-style-11 white">
                                    <a href="tel:+19912345678" target="_blank"
                                        class="link align-v-center white white-hover hover-up-down">
                                        <i class="fa-solid fa-phone icon"></i>
                                        <span class="text ms-05">+1 (99) 1234 5678</span>
                                        <span class="badge ms-05 primary primary-hover">
                                            <span class="badge-text white white-hover">Mon-Sat</span>
                                        </span>
                                    </a>
                                </h3>
                                <p class="description gray">Our headquarters in Las Vegas works for face-to-face from
                                    Monday to Saturday for 24 hours.</p>
                                <div class="list-wrapper align-h-right hover-up-down">
                                    <ul class="icon-h-list">
                                        <li class="item">
                                            <a href="#your-link" target="_blank"
                                                class="link white primary-hover hover-rotate"><i
                                                    class="fa-regular fa-map icon"></i></a>
                                        </li>
                                        <li class="item">
                                            <a href="mailto:contact@mail.com" target="_blank"
                                                class="link white primary-hover hover-rotate"><i
                                                    class="fa-regular fa-envelope icon"></i></a>
                                        </li>
                                        <li class="item me-0">
                                            <a href="https://wa.me/+19912345678?text=Hello..." target="_blank"
                                                class="link white primary-hover hover-rotate"><i
                                                    class="fa-brands fa-whatsapp icon"></i></a>
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
                                <img src="assets/images/jpg/b-35.jpg" alt="Image name"
                                    class="image min-vh-50 fit-cover" />
                            </div>
                            <!-- Box -->
                            <div class="card-body box shadow rounded" data-bg-color="#264653">
                                <!-- Label -->
                                <span class="label-vertical outline">
                                    <span class="label-line gray"></span>
                                    <span class="label-text gray">Spring Valley</span>
                                </span>
                                <!-- Link -->
                                <h3 class="title text-style-11 white">
                                    <a href="tel:+19812345678" target="_blank"
                                        class="link align-v-center white white-hover hover-up-down">
                                        <i class="fa-solid fa-phone icon"></i>
                                        <span class="text ms-05">+1 (98) 1234 5678</span>
                                        <span class="badge ms-05 primary primary-hover">
                                            <span class="badge-text white white-hover">Mon-Fri</span>
                                        </span>
                                    </a>
                                </h3>
                                <p class="description gray">Our branch in Spring Valley works for face-to-face from
                                    Monday to Friday from 10 am to 6 pm.</p>
                                <div class="list-wrapper align-h-right hover-up-down">
                                    <ul class="icon-h-list">
                                        <li class="item">
                                            <a href="#your-link" target="_blank"
                                                class="link white primary-hover hover-rotate"><i
                                                    class="fa-regular fa-map icon"></i></a>
                                        </li>
                                        <li class="item">
                                            <a href="mailto:contact@mail.com" target="_blank"
                                                class="link white primary-hover hover-rotate"><i
                                                    class="fa-regular fa-envelope icon"></i></a>
                                        </li>
                                        <li class="item me-0">
                                            <a href="https://wa.me/+19912345678?text=Hello..." target="_blank"
                                                class="link white primary-hover hover-rotate"><i
                                                    class="fa-brands fa-whatsapp icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Carousel -->
        {{-- <section class="shock-section pb-5 bg-color white">
            <div class="container">
                <!-- Carousel -->
                <div class="swiper slider gapped has-gap has-navigation scheme-2 primary" data-columns="8,6,3,2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-1.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-1.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-2.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-2.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-3.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-3.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-4.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-4.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-5.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-5.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-6.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-6.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-7.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-7.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-8.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-8.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-9.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-9.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-1.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-1.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-2.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-2.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="assets/images/png/a-3.png" class="parent">
                                <div class="image-wrapper hover-opacity">
                                    <img src="assets/images/png/a-3.png" class="image invert-color hover-up-down"
                                        alt="This is an example description for this item." />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-prev simple"></div>
                    <div class="swiper-button-next simple"></div>
                </div>
            </div>
        </section> --}}

        <!-- Form -->
        {{-- <section class="shock-section pt-5 pb-5" data-bg-color="#264653">
            <div class="container max-w-85">
                <!-- Intro -->
                <div class="basic-intro mb-35 text-center">
                    <h2 class="title white">
                        <span class="text-1 text-style-7 text-italic">How can we </span>
                        <span class="text-2 text-style-8"><span class="typed-text"></span></span>
                    </h2>
                    <!-- Srings -->
                    <div id="typed-strings">
                        <span>talk to you?</span>
                        <span>help your company?</span>
                        <span>show solutions?</span>
                    </div>
                    <div class="description gray">
                        <p>Please fill in the form below and we will get back to you shortly. 🥳</p>
                    </div>
                </div>
                <!-- Form -->
                <div class="form-area scheme-2 primary">
                    <form action="php/sender.php" class="form-fields needs-validation ajax-form"
                        novalidate="novalidate">
                        <div class="form-row row">
                            <div class="form-col col-12 col-md-6">
                                <input type="text" name="name" class="form-control" id="InputCompactName"
                                    placeholder="Person name" required="required">
                                <div class="invalid-feedback">Please enter your name.</div>
                                <div class="valid-feedback">Looks good.</div>
                            </div>
                            <div class="form-col col-12 col-md-6">
                                <input type="text" name="company" class="form-control" id="InputCompactCompany"
                                    placeholder="Company name" required="required">
                                <div class="invalid-feedback">Please enter your company name.</div>
                                <div class="valid-feedback">Looks good.</div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12 col-md-6">
                                <input type="email" name="email" class="form-control" id="InputCompactEmail"
                                    placeholder="E-mail address" required="required">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                                <div class="valid-feedback">Looks good.</div>
                            </div>
                            <div class="form-col col-12 col-md-6">
                                <input name="city" id="InputCompactCity" class="form-control form-datalist"
                                    list="InputCompactCityOptions" placeholder="City / Province" required="required">
                                <datalist id="InputCompactCityOptions">
                                    <option value="San Francisco"></option>
                                    <option value="New York"></option>
                                    <option value="Seattle"></option>
                                    <option value="Los Angeles"></option>
                                    <option value="Chicago"></option>
                                </datalist>
                                <div class="invalid-feedback">Please enter your city.</div>
                                <div class="valid-feedback">Looks good.</div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12 col-md-6">
                                <input type="file" name="file" id="InputCompactFile"
                                    class="form-control form-file">
                                <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                            </div>
                            <div class="form-col col-12 col-md-6">
                                <input type="datetime-local" name="date" id="InputCompactDateTime"
                                    class="form-control form-datetime">
                                <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12">
                                <textarea name="message" class="form-control primary form-textarea" id="InputCompactMessage" rows="3"
                                    placeholder="Enter your message (optional)."></textarea>
                                <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12 col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="terms" class="form-check-input primary"
                                        value="" id="InputCheckbox" required="required">
                                    <label class="form-label form-check-label" for="InputCheckbox">
                                        I agree to the <a href="#your-link" class="link white primary-hover"><u>terms
                                                of use</u>.</a>
                                    </label>
                                    <div class="invalid-feedback">Please accept the terms to continue.</div>
                                </div>
                            </div>
                            <div class="form-col col-12 col-md-6 align-h-right">
                                <!-- Button -->
                                <button class="button mt-3 shadow rounded-pill primary white-hover hover-up-down">
                                    <span class="button-text white black-hover">Send Request</span>
                                    <i class="fa-solid fa-arrow-right button-icon white black-hover"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="subject" value="Message sent through the contact form.">
                        <span class="form-alert success">Your message was sent successful. Thanks.</span>
                        <span class="form-alert error">Sorry. We were unable to send your message.</span>
                    </form>
                </div>
            </div>
        </section> --}}

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

    <!-- Search Bar Offcanvas -->
    <div id="shock-search-bar" class="search-bar offcanvas offcanvas-top scheme-1 primary" tabindex="-1"
        aria-hidden="true" aria-modal="true" role="dialog">
        <div class="offcanvas-dialog">
            <div class="offcanvas-content">
                <div class="megamenu w-100">
                    <div class="container">
                        <div class="section-inner-expanded fit-over-scrollbar">
                            <i class="fa-solid fa-xmark close-button black primary-hover" data-bs-dismiss="offcanvas"
                                aria-label="Close"></i>
                            <div class="row g-3">
                                <!-- Search Tags -->
                                <div class="col-12 col-md-6">
                                    <div class="megamenu-item">
                                        <h6 class="title">Popular searches</h6>
                                        <!-- Tag Cloud -->
                                        <div class="tag-cloud">
                                            <a href="#your-link" class="link">
                                                <span class="badge outline gray-50 primary-hover">
                                                    <span class="badge-text gray white-hover">Environment</span>
                                                </span>
                                            </a>
                                            <a href="#your-link" class="link">
                                                <span
                                                    class="badge outline active gray-50 primary-hover floating-item-smooth">
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
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Form -->
                                <div class="col-12 col-md-6">
                                    <div class="megamenu-item">
                                        <h6 class="title"><mark class="animated-underline accent">What are you
                                                looking for?</mark></h6>
                                        <!-- Form -->
                                        <div class="form-area scheme-1">
                                            <form class="form-fields needs-validation" novalidate="novalidate">
                                                <div class="form-row row has-icon">
                                                    <div class="form-col form-floating">
                                                        <button class="button overlay-button"><img
                                                                class="overlay-image-icon"
                                                                src="assets/svg/send-outline.svg" alt="Icon name"
                                                                data-shock-icon="32" /></button>
                                                        <input id="InputSearchNavbar"
                                                            class="form-control focus-trigger-field"
                                                            name="InputSearchNavbar" placeholder="Type keywords..."
                                                            required="required">
                                                        <label for="InputSearchNavbar" class="form-label">Type
                                                            keywords...</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <a href="#" class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-twitter"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-linkedin-in"></i></a>
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
                                    <a href="{{ route('privacy') }}" class="nav-link">
                                        <span class="text">Privacy Policy</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">
                                        <span class="text">About Us</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">
                                        <span class="text">Contact Us</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('terms') }}" class="nav-link">
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
                                <p>Subscribe to our newsletter and stay up to date with what's happening in the world.
                                </p>
                                <p>By submitting this form you agree to the <a href="#"
                                        class="link gray primary-hover"><u>terms of use</u>.</a></p>
                            </div>
                            <!-- Form -->
                            <div class="form-area scheme-2">
                                <form action="php/sender.php" class="form-fields needs-validation ajax-form"
                                    novalidate="novalidate">
                                    <div class="form-row row has-icon">
                                        <div class="form-col form-floating">
                                            <button class="button overlay-button"><img class="overlay-image-icon"
                                                    src="assets/svg/send-outline.svg" alt="Icon name"
                                                    data-shock-icon="32" /></button>
                                            <input type="email" name="email" id="InputFloatingFooter"
                                                class="form-control focus-trigger-field"
                                                placeholder="Type your email..." required="required">
                                            <label for="InputFloatingFooter" class="form-label">Type your
                                                email...</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="subject"
                                        value="Message sent through the contact form.">
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
            <div class="text">© 2023 - All rights reserved. The <a href="https://codings.dev?redirect=shock-html"
                    class="link gray primary-hover"><u>Shock Theme</u></a> is developed and maintained by <a
                    href="https://codings.dev?ref=shock-html" class="link gray primary-hover"><u>Codings
                        Group</u></a>.</div>
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
