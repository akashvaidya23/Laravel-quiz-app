<!DOCTYPE html>
<html lang="en">
<head>
    <title>Timepro | Career Carnival</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- custom styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

    <!-- slick slider -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>
<body>
    <header>
        <nav class="navbar" id="navbar">
            <div class="container d-block">
                <div class="position-relative text-center">
                    <a href="/choose-game" class="backArrow">
                        <img src="{{ asset('/images/arrow-left.png') }}">
                    </a>
                    <h4 class="mb-0">Sector</h4>
                </div>
            </div>
        </nav>
    </header>
    <div class="pageBody">
        <section>
            <div class="container py-5">
                <p class="smallTxt mb-4">To begin, first select the sector of your choice</p>
                <div class="row">
                    @foreach($sectors as $sector)
                        <div class="col-md-6">
                            <a href="details-form/{{$sector->id}}">
                                <div class="infoBox mb-4">
                                    <div class="infoContent">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0">{{$sector->name}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bottomGraphic"></section>
    </div>

    <footer>
        <div class="text-center footer">
            <p class="fw-bold">Powered by</p>
            <img src="{{ asset('/images/timespro-logo.svg') }}" alt="Timepro">
            <span>*Terms & Conditions Apply</span>
        </div>
    </footer>
</body>
</html>