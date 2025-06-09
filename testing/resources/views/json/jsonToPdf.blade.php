<!DOCTYPE html>
<html>

<head>
    <title>Upload JSON to PDF</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <x-navbar :title="'Upload JSON to PDF'" :form="true">
        <section class="shock-section has-overlay">
            <div class="swiper slider has-navigation scheme-2 primary" data-columns="1,1,1,1" data-loop="true">
                <div class="banner">
                    <div class="content-wrapper">
                        <!-- Intro -->
                        <div class="basic-intro max-w-75 text-center">
                            <h2 class="mb-4 text-white text-style-2">Upload JSON to Convert into PDF</h2>
                            <form action="{{ route('json.pdf') }}" method="POST" enctype="multipart/form-data"
                                class="d-flex flex-column align-items-center gap-3">
                                @csrf
                                <div class="d-flex flex-row justify-content-center gap-5 align-items-center w-100">
                                    <label for="json_file" class="button rounded-pill white mb-0"
                                        style="background-color: #fff; color: #000; transition: none;">
                                        <span class="button-text black">Choose JSON File</span>
                                    </label>
                                    <button type="submit"
                                        class="button shadow rounded-pill primary white-hover hover-up-down mb-0">
                                        <span class="button-text white black-hover">Convert to PDF</span>
                                        <i class="fa-solid fa-file-pdf button-icon white black-hover"></i>
                                    </button>
                                </div>
                                <input id="json_file" type="file" name="json_file" accept=".json,.txt" required
                                    style="display: none;">
                            </form>

                            <!-- Display selected file name -->
                            <div id="selected-file-name" class="mt-2 text-white"></div>
                            @if ($errors->has('json_file'))
                                <div class="alert alert-danger mt-2 w-25 mx-auto">
                                    {{ $errors->first('json_file') }}
                                </div>
                            @endif

                            <script>
                                document.getElementById('json_file').addEventListener('change', function(e) {
                                    const file = e.target.files[0];
                                    document.getElementById('selected-file-name').textContent = file ? `Selected file: ${file.name}` : '';
                                });
                            </script>
                        </div>
                    </div>

                    <!-- Background Image -->
                    <div class="image-wrapper">
                        <img src="assets/images/jpg/json-bg.jpg" class="image vh-100 fit-cover"
                            alt="JSON upload background image" />
                    </div>

                    <!-- Overlay -->
                    <div class="overlay opacity-75" data-bg-color="#264653"></div>
                </div>
            </div>
        </section>
    </x-navbar>

    <!-- SweetAlert Notifications -->
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Conversion Failed',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    @if (session('success') && session('download'))
        <script>
            function closeSwalAndDownload(url) {
                Swal.close();
                setTimeout(() => window.open(url, '_blank'), 100);
            }

            Swal.fire({
                icon: 'success',
                title: 'Success',
                html: `{!! session('success') !!}<br><br>
                    <a href="{{ session('download') }}"
                       class="btn btn-success"
                       target="_blank"
                       download
                       onclick="closeSwalAndDownload('{{ session('download') }}'); return false;">
                       Download PDF
                    </a>`,
                showConfirmButton: false,
                allowOutsideClick: false
            });
        </script>
    @endif

</body>

</html>
