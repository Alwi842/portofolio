<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Certificate - Portofolio</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta name="description" content="Portofolio Alwi abdullah royyan">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    @include('header')
    <main class="page hire-me-page">
        <section class="container">
            @foreach ($imagePaths as $image)
                <div class="photo-container">
                    <img src="{{ asset($image) }}" alt="Certificate" class="certificate">
                </div>
            @endforeach
        </section>
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>