<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Portofolio</title>
    <meta name="description" content="Portofolio Alwi abdullah royyan">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    @include('header')
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar" style="background-image:url(&quot;assets/img/avatars/avatar.jpg&quot;);"></div>
                <div class="about-me">
                    <p>Hello, I'm <strong>Alwi Abdullah Royyan</strong>,&nbsp;I am a recent graduate of the Technical<br>Information program at Universitas Muhammadiyah Tangerang. With a strong<br>foundation in networking, database management, software development, I am<br>eager to apply my knowledge and skills to a challenging and rewarding role in<br>the IT industry.</p><a class="btn btn-outline-primary" role="button" href="hire-me">Hire me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/projects/ppdb_preview.png"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/projects/kelulusan_preview.png"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/projects/himfest_preview.jpg"></a></div>
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3>Like what you see?</h3><a class="btn btn-outline-primary btn-lg" type="button" href="hire-me">Hire me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>Special Skills</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Programming</h3>
                                <p class="card-text">Specialize in wide programming language and graduation from IT major.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Design</h3>
                                <p class="card-text">Creating modern design mainly as freelancer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Web development</h3>
                                <p class="card-text">Experienced in web development in previous job.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>