<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{{ asset('') }}">
  <meta charset="UTF-8" />
  <title>JSON Full Form Formatter</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <!-- Bootstrap CSS + JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Prettier & Parsers -->
  <script src="https://unpkg.com/prettier@2.8.8/standalone.js"></script>
  <script src="https://unpkg.com/prettier@2.8.8/parser-babel.js"></script>
  <script src="https://unpkg.com/prettier@2.8.8/parser-typescript.js"></script>
  <script src="https://unpkg.com/prettier@2.8.8/parser-html.js"></script>
  <script src="https://unpkg.com/prettier@2.8.8/parser-postcss.js"></script>
  <script src="https://unpkg.com/prettier@2.8.8/parser-json.js"></script>
</head>

<body class="bg-light">

  <x-navbar :title="'Upload JSON to Excel'" :form="true">
    <section class="position-relative py-5 overflow-hidden">
      <div class="container-fluid px-5 position-relative z-1">
        <!-- Heading -->
        <h2 class="mt-5 mb-5 text-white text-center">JSON Viewer</h2>

        <!-- Controls -->
        <div class="row justify-content-center g-2 mb-3">
          <div class="col-auto">
            <input type="file" id="fileInput" accept=".json" class="form-control form-control-sm" />
          </div>
          <div class="col-auto">
            <button id="validateBtn" class="btn btn-light btn-sm px-3">Validate</button>
          </div>
          <div class="col-auto">
            <select id="tabWidthSelect" class="form-select form-select-sm">
              <option value="2">2 Spaces</option>
              <option value="4" selected>4 Spaces</option>
              <option value="8">8 Spaces</option>
            </select>
          </div>
          <div class="col-auto">
            <button id="formatBtn" class="btn btn-light btn-sm px-3">Format / Beautify</button>
          </div>
          <div class="col-auto">
            <button id="minifyBtn" class="btn btn-light btn-sm px-3">Minify / Compact</button>
          </div>
          <div class="col-auto">
            <button id="downloadBtn" class="btn btn-light btn-sm px-3">Download</button>
          </div>
        </div>

        <div id="statusMessage" class="text-center small" style="min-height: 20px;"></div>

        <!-- Input / Output -->
        <div class="row gx-4">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <textarea id="codeInput"
              class="form-control bg-white text-dark w-100"
              placeholder="Paste JSON here…"
              style="height: 400px; resize: none; font-family: monospace; overflow: auto; white-space: pre-wrap; word-wrap: break-word;"></textarea>
          </div>
          <div class="col-lg-6">
            <pre id="formattedOutput"
              class="bg-white text-dark border rounded p-2 w-100"
              style="height: 400px; overflow: auto; font-family: monospace; white-space: pre-wrap; word-wrap: break-word;">Formatted output will appear here…</pre>
          </div>
        </div>
      </div>

      <!-- Background Image & Overlay -->
      <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="assets/images/jpg/json-bg.jpg"
             class="w-100 h-100 object-fit-cover"
             alt="JSON upload background image" />
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background-color: #264653; opacity: 0.75;"></div>
      </div>
    </section>
  </x-navbar>

  <script src="assets/js/jsonViewer.js"></script>
</body>

</html>
