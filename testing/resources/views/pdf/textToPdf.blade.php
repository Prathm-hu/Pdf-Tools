<!DOCTYPE html>
<html>

<head>
    <title>Text to PDF</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-light">

    <x-navbar :title="'Text to PDF'" :form="true">
        <section class="py-5 position-relative overflow-hidden">
            <div class="container-fluid px-5 position-relative z-1">
                <h1 class="mt-5 mb-5 text-white text-style-2 text-center">Convert Text to PDF</h1>

                <form action="{{ route('text.pdf') }}" method="POST"
                    class="d-flex flex-column align-items-center gap-3 w-100">
                    @csrf
                    <textarea name="content" rows="10" class="form-control w-75"
                        placeholder="Enter or paste your text here..." required>{{ old('content') }}</textarea>

                    <button type="submit"
                        class="button shadow rounded-pill primary white-hover hover-up-down mt-3 mb-0">
                        <span class="button-text white black-hover">Convert to PDF</span>
                        <i class="fa-solid fa-file-pdf button-icon white black-hover"></i>
                    </button>
                </form>

                @if ($errors->has('content'))
                    <div class="alert alert-danger mt-2 w-25 mx-auto">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>

            <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
                <img src="assets/images/jpg/json-bg.jpg" class="w-100 h-100 object-fit-cover"
                    alt="Text to PDF background image">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: #264653; opacity: 0.75;"></div>
            </div>
        </section>
    </x-navbar>

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
