<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Portofolio</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta name="description" content="Portofolio Alwi abdullah royyan">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    @include('header')
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                @if (true)
                <div class="heading">
                    <h2>Under construction</h2>
                </div>
                <h3 class="text-center"><a class="btn btn-outline-primary btn-lg" type="button" href="projects-grid-cards">back</a></h3>
                @else
                <form class="border rounded shadow-lg p-3 p-md-5" data-bs-theme="light">
                    <div class="mb-3"><label class="form-label" for="subject">Subject</label><select class="form-select" id="subject">
                            <optgroup label="This is a group">
                                <option value="12" selected="">Job offer</option>
                                <option value="13">This is item 2</option>
                                <option value="14">This is item 3</option>
                            </optgroup>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email"></div>
                    <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control" id="message"></textarea></div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6"><label class="form-label" for="hire-date">Date</label><input class="form-control" id="hire-date" type="date"></div>
                            <div class="col-md-6 button"><button class="btn btn-primary d-block w-100" type="submit">Hire Me</button></div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </section>
    </main>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>