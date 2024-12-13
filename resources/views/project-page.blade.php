<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Project Page - Portofolio</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta name="description" content="Portofolio Alwi abdullah royyan">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    @include('header')
    <main class="page project-page">
        <section class="portfolio-block project">
            <div class="container">
                <div class="heading">
                    <h2>{{ $title }}</h2>
                </div>
                @if ($p!=='error')
                <div class="image" style="background-image:url(&quot;assets/img/projects/{{ $big }}&quot;);"></div>
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-1 info">
                        <h3>Description</h3>
                        <p>{{ $desc }}</p>    
                    </div>
                    <div class="col-12 col-md-3 offset-md-1 meta">
                        <div class="tags"><span class="meta-heading">Tags</span>{{ $tags }}<span class="meta-heading">Date</span><span>{{ $date }}</span></div>
                    </div>
                </div>
                    @if ($demo)
                     <h3 class="text-center"><a class="btn btn-outline-primary btn-lg" type="button" href="{{ $demo }}-grid-cards">DEMO</a></h3>
                    @endif
                @endif
                    <h3 class="text-center"><a class="btn btn-outline-primary btn-lg" type="button" href="projects-grid-cards">back</a></h3>
            </div>
        </section>
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>