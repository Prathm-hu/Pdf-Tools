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
    <style>
        /* Dropdown animation and positioning */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translate(-50%, 10px);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
            display: block;
            top: 100%;
            left: 50%;
            z-index: 1000;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 24px 32px;
            min-width: 720px;
        }

        .nav-item.dropdown:hover>.dropdown-menu,
        .dropdown-menu:hover {
            opacity: 1;
            visibility: visible;
            transform: translate(-50%, 0);
        }

        /* Dropdown items */
        .dropdown-item {
            padding: 8px 12px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #333;
            white-space: nowrap;
        }

        .dropdown-item:hover {
            background-color: #f2f2f2;
            color: #000;
        }

        /* Uniform padding inside columns */
        .dropdown-menu .row>div {
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
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
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo main-logo"
                        style="height:60px; width:60px;" />
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo sticky-logo"
                        style="height:60px; width:60px;" />
                    <img src="assets/images/png/Logo.png" alt="Shock Theme" class="logo mobile-logo"
                        style="height:60px; width:60px;" />
                </a>

                <!-- Mobile toggle -->
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                    aria-expanded="false">
                    <span class="navbar-toggler-icon">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </span>
                </button>

                <div id="navbar-items" class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <!-- Home -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>

                        <!-- Tools Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex align-items-center gap-1" href="#" id="toolsDropdown"
                                role="button">
                                <span class="text">Tools</span>
                                <i class="bi bi-caret-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="toolsDropdown">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="#"><i class="bi bi-files"></i> Merge
                                            PDF</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="bi bi-file-earmark-image"></i>
                                            JPG to PDF</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-water"></i> Watermark
                                            PDF</a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"></i>
                                            Rotate PDF</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-file-word"></i> Add
                                            Page Numbers</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-filetype-json"></i>
                                            JSON to HTML</a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="#"><i
                                                class="bi bi-file-earmark-spreadsheet"></i> JSON to Excel</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="bi bi-file-earmark-text"></i> JSON to PDF</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="bi bi-file-earmark-text"></i> Text to PDF</a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="#"><i class="bi bi-eye"></i> JSON
                                            Viewer</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-table"></i> JSON
                                            Table</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-code-slash"></i> Code
                                            Formatter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="toolsDropdown" style="min-width: 720px;">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="{{ route('mergePdf.form') }}">
                                            <i class="bi bi-files"></i> Merge PDF
                                        </a>
                                        <a class="dropdown-item" href="{{ route('jpgToPdf.form') }}">
                                            <i class="bi bi-file-earmark-image"></i> JPG to PDF
                                        </a>
                                        <a class="dropdown-item" href="{{ route('watermarkPdf.form') }}">
                                            <i class="bi bi-water"></i> Watermark PDF
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="{{ route('pdfRotate.form') }}">
                                            <i class="bi bi-arrow-repeat"></i> Rotate PDF
                                        </a>
                                        <a class="dropdown-item" href="{{ route('pdfPage.form') }}">
                                            <i class="bi bi-file-word"></i> Add Page Numbers
                                        </a>
                                        <a class="dropdown-item" href="{{ route('json.form') }}">
                                            <i class="bi bi-filetype-json"></i> JSON to HTML
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="{{ route('jsonToExcel.form') }}">
                                            <i class="bi bi-file-earmark-spreadsheet"></i> JSON to Excel
                                        </a>
                                        <a class="dropdown-item" href="{{ route('jsonToPdf.form') }}">
                                            <i class="bi bi-file-earmark-text"></i> JSON to PDF
                                        </a>
                                        <a class="dropdown-item" href="{{ route('txtToPdf.form') }}">
                                            <i class="bi bi-file-earmark-text"></i> Text to PDF
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <a class="dropdown-item" href="{{ route('jsonViewer.form') }}">
                                            <i class="bi bi-eye"></i> JSON Viewer
                                        </a>
                                        <a class="dropdown-item" href="{{ route('jsonToTable.form') }}">
                                            <i class="bi bi-table"></i> JSON Table
                                        </a>
                                        <a class="dropdown-item" href="{{ route('formatter') }}">
                                            <i class="bi bi-code-slash"></i> Code Formatter
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <!-- About & Contact -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
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
                            <h6 class="title">Tools</h6>
                            <!-- Tag Cloud -->
                            <div class="tag-cloud">
                                <a href="{{ route('mergePdf.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">Merge PDF</span>
                                    </span>
                                </a>
                                <a href="{{ route('jpgToPdf.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">JPG to PDF</span>
                                    </span>
                                </a>
                                <a href="{{ route('watermarkPdf.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">Watermark PDF</span>
                                    </span>
                                </a>
                                <a href="{{ route('pdfRotate.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">Rotate PDF</span>
                                    </span>
                                </a>
                                <a href="{{ route('pdfPage.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">Add Page Numbers</span>
                                    </span>
                                </a>
                                <a href="{{ route('json.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">JSON to HTML</span>
                                    </span>
                                </a>
                                <a href="{{ route('jsonToExcel.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">JSON to Excel</span>
                                    </span>
                                </a>
                                <a href="{{ route('jsonToPdf.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">JSON to PDF</span>
                                    </span>
                                </a>
                                <a href="{{ route('txtToPdf.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">Text to PDF</span>
                                    </span>
                                </a>
                                <a href="{{ route('jsonViewer.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">JSON Viewer</span>
                                    </span>
                                </a>
                                <a href="{{ route('jsonToTable.form') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">JSON Table</span>
                                    </span>
                                </a>
                                <a href="{{ route('formatter') }}" class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">Code Formatter</span>
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
                                <form action="{{ route('sendMail') }}" method="POST"
                                    class="form-fields needs-validation ajax-form" novalidate>
                                    @csrf
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
                                    <span id="successMsg" class="form-alert success" style="display: none;"></span>
                                    <span id="errorMsg" class="form-alert error" style="display: none;"></span>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="text">© 2023 - All rights are reserved Kareliya InfoTech. This <a href="#"
                    class="link gray primary-hover"><u>website</u></a> is developed and maintained by <a
                    href="" class="link gray primary-hover">Kareliya Group</a>.</div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector('.ajax-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const formData = new FormData(form);

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'Accept': 'application/json'
                            },
                            body: formData
                        })
                        .then(async response => {
                            const data = await response.json();
                            if (response.ok && data.status === 'success') {
                                document.getElementById('successMsg').style.display = 'block';
                                document.getElementById('successMsg').textContent = data.message;
                                document.getElementById('errorMsg').style.display = 'none';
                            } else {
                                document.getElementById('errorMsg').style.display = 'block';
                                document.getElementById('errorMsg').textContent = data.message ||
                                    'Failed to send email.';
                                document.getElementById('successMsg').style.display = 'none';
                            }
                        })
                        .catch(error => {
                            document.getElementById('errorMsg').style.display = 'block';
                            document.getElementById('errorMsg').textContent =
                                'An error occurred. Try again.';
                            document.getElementById('successMsg').style.display = 'none';
                        });
                });
            }
        });
    </script>
</body>

</html>
