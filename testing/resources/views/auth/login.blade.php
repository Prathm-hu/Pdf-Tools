<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Kareliya Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="uploads/logo/kareliya_logo.png">

    <!-- Layout config Js -->
    <script src="adminAssets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="adminAssets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="adminAssets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="adminAssets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="adminAssets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .swal-toast-popup {
        align-items: center;
    }

    .swal-toast-title {
        margin: 0;
        flex-grow: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .swal-toast-close {
        position: static;
        margin-left: 10px;
    }
</style>

<body>

    @if (Session::has('success'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                text: '{{ Session::get('success') }}',
                showConfirmButton: false,
                timer: 2000,
                width: '400px',
                padding: '0.5em 1em',
                customClass: {
                    container: 'swal-toast-container',
                    popup: 'swal-toast-popup',
                    title: 'swal-toast-title',
                    closeButton: 'swal-toast-close'
                }
            });
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                text: '{{ Session::get('error') }}',
                showConfirmButton: false,
                timer: 2000,
                width: '400px',
                padding: '0.5em 1em',
                customClass: {
                    container: 'swal-toast-container',
                    popup: 'swal-toast-popup',
                    title: 'swal-toast-title',
                    closeButton: 'swal-toast-close'
                }
            });
        </script>
    @endif

    <div class="auth-page-wrapper pt-5">

        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="text-center mt-4">
                                <img src="assets/images/png/Logo.png" alt="Kareliya Logo" height="60">
                            </div>
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Sign In</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="username"
                                                placeholder="Enter email">
                                            @error('email')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5"
                                                    placeholder="Enter password" id="password-input">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-between align-items-center">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Remember
                                                    me</label>
                                            </div>
                                            {{-- <a href="{{ route('emailVerify') }}" class="text-decoration-none">Forgot Password?</a> --}}
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        {{-- <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}"
                                    class="fw-semibold text-primary text-decoration-underline"> Sign Up </a> </p>
                        </div> --}}
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy; Kareliya. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JAVASCRIPT -->
    <script src="adminAssets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="adminAssets/libs/simplebar/simplebar.min.js"></script>
    <script src="adminAssets/libs/node-waves/waves.min.js"></script>
    <script src="adminAssets/libs/feather-icons/feather.min.js"></script>
    <script src="adminAssets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="adminAssets/js/plugins.js"></script>
    <script src="adminAssets/libs/particles.js/particles.js"></script>
    <script src="adminAssets/js/pages/particles.app.js"></script>
    <script src="adminAssets/js/pages/password-addon.init.js"></script>
    <script>
        const toggleBtn = document.getElementById('password-addon');
        const passwordInput = document.getElementById('password-input');

        toggleBtn.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
</body>

</html>
