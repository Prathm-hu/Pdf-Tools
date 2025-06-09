<!DOCTYPE html>
<html>

<head>
    <title>Rotate PDF</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <x-navbar :title="'Rotate PDF'" :form="true">
        <section class="shock-section has-overlay">
            <div class="swiper slider has-navigation scheme-2 primary" data-columns="1,1,1,1" data-loop="true">
                <div class="banner">
                    <div class="content-wrapper">
                        <div class="basic-intro max-w-75 text-center">
                            <h2 class="mb-4 text-white text-style-2">Rotate PDF Pages</h2>

                            <form action="{{ route('pdf.rotate') }}" method="POST" enctype="multipart/form-data"
                                class="d-flex flex-column align-items-center gap-3">
                                @csrf

                                <div class="d-flex flex-row justify-content-center gap-5 align-items-center w-100">
                                    <label for="pdf_file" class="button rounded-pill white mb-0"
                                        style="background-color: #fff; color: #000; transition: none;"
                                        onmouseover="this.style.backgroundColor='#fff';this.style.color='#000';"
                                        onmouseout="this.style.backgroundColor='#fff';this.style.color='#000';">
                                        <span class="button-text black">Choose PDF File</span>
                                    </label>

                                    <select name="angle" class="form-control rounded-pill w-25 mt-1" required>
                                        <option value="">Select Angle</option>
                                        <option value="90">Rotate 90°</option>
                                        <option value="180">Rotate 180°</option>
                                        <option value="270">Rotate 270°</option>
                                    </select>

                                    <button type="submit"
                                        class="button shadow rounded-pill primary white-hover hover-up-down mb-0">
                                        <span class="button-text white black-hover">Rotate PDF</span>
                                        <i class="fa-solid fa-rotate button-icon white black-hover"></i>
                                    </button>
                                </div>

                                <input id="pdf_file" type="file" name="pdf" accept="application/pdf" style="display: none;">
                            </form>

                            <!-- Display selected file name -->
                            <div id="selected-file-name" class="mt-2 text-white"></div>

                            @if ($errors->has('pdf'))
                                <div class="alert alert-danger mt-2 w-25 mx-auto">
                                    {{ $errors->first('pdf') }}
                                </div>
                            @endif
                            @if ($errors->has('angle'))
                                <div class="alert alert-danger mt-2 w-25 mx-auto">
                                    {{ $errors->first('angle') }}
                                </div>
                            @endif

                            <script>
                                document.getElementById('pdf_file').addEventListener('change', function (e) {
                                    const file = e.target.files[0];
                                    document.getElementById('selected-file-name').textContent = file ? `Selected file: ${file.name}` : '';
                                });
                            </script>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="image-wrapper">
                        <img src="assets/images/jpg/a-28.jpg" class="image vh-100 fit-cover"
                            alt="Rotate PDF Background Image" />
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
                title: 'Rotation Failed',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    @if (session('success') && session('file'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'PDF Rotation Successful',
            html: `<a id="downloadBtn" href="{{ session('file') }}" class="btn btn-success mt-2" download target="_blank" rel="noopener">Download Rotated PDF</a>`,
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
                document.getElementById('downloadBtn').addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent default anchor behavior
                    window.open("{{ session('file') }}", '_blank', 'noopener');
                    Swal.close();
                });
            }
        });
    </script>
    @endif


</body>

</html>
