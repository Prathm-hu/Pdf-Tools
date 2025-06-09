<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JSON to HTML Converter</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Bootstrap CSS + JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

    <x-navbar :title="'JSON to HTML Converter'" :form="true">
        <section class="py-5 position-relative overflow-hidden">
            <div class="container-fluid px-5 position-relative z-1">
                <h1 class="mt-5 mb-5 text-white text-style-2 text-center">JSON to HTML Converter</h1>

                <div class="row justify-content-center g-2 mb-3">
                    <div class="col-auto">
                        <input type="file" id="fileInput" accept=".json" class="form-control form-control-sm">
                    </div>
                    <div class="col-auto">
                        <button id="convertBtn" class="btn btn-light btn-sm px-3">Convert to HTML</button>
                    </div>
                    <div class="col-auto">
                        <button id="downloadBtn" class="btn btn-light btn-sm px-3">Download HTML</button>
                    </div>
                </div>

                <div id="statusMessage" class="text-center small" style="min-height: 20px;"></div>

                <div class="row gx-4">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <textarea id="codeInput" class="form-control bg-white text-dark w-100"
                            placeholder="Paste JSON here…"
                            style="height: 400px; resize: none; font-family: monospace; overflow: auto; white-space: pre-wrap; word-wrap: break-word;"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <div id="htmlOutput"
                            class="bg-white text-dark border rounded p-2 w-100"
                            style="height: 400px; overflow: auto; font-family: monospace; white-space: pre-wrap; word-wrap: break-word;"></div>
                    </div>
                </div>
            </div>

            <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
                <img src="assets/images/jpg/json-bg.jpg" class="w-100 h-100 object-fit-cover"
                    alt="JSON upload background image">
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background-color: #264653; opacity: 0.75;"></div>
            </div>
        </section>
    </x-navbar>

    <script src="assets/js/jsonHtml.js"></script>
</body>

</html>
