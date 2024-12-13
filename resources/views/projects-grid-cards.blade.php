<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Portofolio</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta name="description" content="Portofolio Alwi abdullah royyan">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    @include('header')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>PROGRAMMING PROJECTS </h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="project-page?p=portofolio"><img class="card-img-top scale-on-hover" src="assets/img/projects/portofolio_preview.png" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="project-page?p=portofolio">MY PORTOFOLIO SITE</a></h6>
                                <p class="text-muted card-text">This project using framework laravel, node.js and mysql.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="project-page?p=ppdb"><img class="card-img-top scale-on-hover" src="assets/img/projects/ppdb_preview.png" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="project-page?p=ppdb">SCHOOL REGISTRY</a></h6>
                                <p class="text-muted card-text">This project is using PHP and mysql, build from ground up.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="project-page?p=kelulusan"><img class="card-img-top scale-on-hover" src="assets/img/projects/kelulusan_preview.png" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="project-page?p=kelulusan">GRADUATION INFO</a></h6>
                                <p class="text-muted card-text">This Project is using PHP and mysql, build from ground up.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="portfolio-block projects-cards">
                <div class="container">
                    <div class="heading">
                        <h2>DESIGN PROJECTS</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="project-page?p=bukber"><img class="card-img-top scale-on-hover" src="assets/img/projects/bukber_preview.jpg" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="project-page?p=bukber">Banner Bukber Bem 2019</a></h6>
                                    <p class="text-muted card-text">Desain banner bukber bem yang dilaksanakan pada 2018.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="project-page?p=jarpoel"><img class="card-img-top scale-on-hover" src="assets/img/projects/jarpoel_preview.png" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="project-page?p=jarpoel">Jarpoel</a></h6>
                                    <p class="text-muted card-text">Design for cloth, jarpoel or jarang pulang.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="project-page?p=hifest"><img class="card-img-top scale-on-hover" src="assets/img/projects/hifest_preview.png" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="project-page?p=hifest">HI Fest logo</a></h6>
                                    <p class="text-muted card-text">HI fest logo for himti festifal 2019.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>