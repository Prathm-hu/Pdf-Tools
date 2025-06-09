<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Watermark Failed',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                html: `{!! session('success') !!}<br><br><a href="{{ session('download') }}" class="btn btn-success" target="_blank">Download Watermarked PDF</a>`,
                showConfirmButton: false,
                timer: 8000
            });
        </script>
    @endif
    <x-navbar :title="'Add Watermark to PDF'" :form="true">
        <section class="shock-section has-overlay">
            <div class="swiper slider has-navigation scheme-2 primary" data-columns="1,1,1,1" data-loop="true">
                <div class="">
                    <div class="banner">
                        <div class="content-wrapper">
                            <!-- Intro -->
                            <div class="basic-intro max-w-75 text-center">
                                <h2 class="mb-4 text-white text-style-2">Add Watermark to PDF</h2>
                                <form action="{{ route('watermarkPdf.convert') }}" method="POST"
                                    enctype="multipart/form-data" class="d-flex flex-column align-items-center gap-3">
                                    @csrf
                                    <div class="d-flex flex-row justify-content-center gap-5 align-items-center w-100">
                                        <label for="pdf_file" class="button rounded-pill white mb-0"
                                            style="background-color: #fff; color: #000; transition: none;"
                                            onmouseover="this.style.backgroundColor='#fff';this.style.color='#000';"
                                            onmouseout="this.style.backgroundColor='#fff';this.style.color='#000';">
                                            <span class="button-text black">Choose PDF File</span>
                                            <input id="pdf_file" type="file" name="pdf" accept="application/pdf"
                                                 style="display:none;">
                                        </label>

                                        <input type="text" name="watermark_text" placeholder="Enter watermark text"
                                                 class="form-control mt-1" style="max-width: 200px;">

                                        <button type="submit"
                                            class="button shadow rounded-pill primary white-hover hover-up-down mb-0">
                                            <span class="button-text white black-hover">Add Watermark</span>
                                            <i class="fa-solid fa-cog button-icon white black-hover"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- Button -->
                                <div id="selected-file-name" class="mt-2 text-white"></div>
                                @if ($errors->has('pdf'))
                                    <div class="alert alert-danger mt-2 w-25 mx-auto">
                                        {{ $errors->first('pdf') }}
                                    </div>
                                @endif
                                <script>
                                    document.getElementById('pdf_file').addEventListener('change', function(e) {
                                        const fileName = e.target.files.length ? e.target.files[0].name : '';
                                        document.getElementById('selected-file-name').textContent = fileName ? `Selected file: ${fileName}` :
                                        '';
                                    });
                                </script>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="image-wrapper">
                            <img src="assets/images/jpg/a-28.jpg" class="image vh-100 fit-cover"
                                alt="This is an example description for this item." />
                        </div>
                        <!-- Overlay -->
                        <div class="overlay opacity-75" data-bg-color="#264653"></div>
                    </div>
                </div>
            </div>
        </section>
    </x-navbar>
</body>

</html>
