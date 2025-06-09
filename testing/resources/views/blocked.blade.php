<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Something Went Wrong</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="text-center">
        <h1 class="display-1 text-danger fw-bold">Oops!</h1>
        <h2 class="mb-3">Something Went Wrong</h2>
        <p class="text-muted mb-4">We're sorry, but something unexpected happened.<br>Please try again later.</p>

        <a href="{{route('index')}}" class="btn btn-outline-secondary me-2">Please try again</a>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
