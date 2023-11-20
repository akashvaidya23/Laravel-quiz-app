<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <img alt="TimesPro | Career Carnival" src=" {{ asset('images/logo.png') }}" class="logo">
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <div class="pageBody">
            <section>
                <div class="container homeBanner pt-4 pb-5 text-center">
                    <h1 class="text-uppercase fw-normal text-center">Play Smart, <span class="colorRed fw-bold d-block">Win
                            Big!</span></h1>
                    <img src="{{ asset ('images/banner-img.png') }}" alt="" />
                    <a href="/choose-game"><button class="blueBtn bigFontBtn w-100 d-block m-auto">Start
                            Game</button></a>
                </div>
            </section>

            <section class="learnerSection pt-5">
                <div class="redBg mt-4 mt-md-5 pb-5">
                    <h2 class="title pb-3">Learner Voice</h2>
                    <div class="container">
                        <div class="customSlider">
                            <div class="slide-item">
                                <div class="videoPlayer mb-2">
                                    <iframe width="100%" height="200px" width="100%"
                                        src="https://www.youtube.com/embed/v3dJmCrsN3o?si=vwvUhLJb4ZRtYyMq?showinfo=0"
                                        frameborder="0" allowfullscreen>
                                    </iframe>
                                </div>
                                <span class="smallLabel">Sector</span>
                                <div class="py-3">
                                    <p class="mb-0 cardName">Akash Singh</p>
                                    <small>Microsoft, Sr. Software Engineer</small>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="videoPlayer mb-2">
                                    <iframe width="100%" height="200px"
                                        src="https://www.youtube.com/embed/v3dJmCrsN3o?si=vwvUhLJb4ZRtYyMq?showinfo=0"
                                        frameborder="0" allowfullscreen>
                                    </iframe>
                                </div>
                                <span class="smallLabel">Sector</span>
                                <div class="py-3">
                                    <p class="mb-0 cardName">Akash Singh</p>
                                    <small>Microsoft, Sr. Software Engineer</small>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="videoPlayer mb-2">
                                    <iframe width="100%" height="200px"
                                        src="https://www.youtube.com/embed/v3dJmCrsN3o?si=vwvUhLJb4ZRtYyMq?showinfo=0"
                                        frameborder="0" allowfullscreen>
                                    </iframe>
                                </div>
                                <span class="smallLabel">Sector</span>
                                <div class="py-3">
                                    <p class="mb-0 cardName">Akash Singh</p>
                                    <small>Microsoft, Sr. Software Engineer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="whiteBg text-center pt-5 pb-3">
                <div class="container">
                    <h2 class="title pb-3">Why TimesPro?</h2>
                    <div class="customSlider blueDots">
                        <div class="slide-item">
                            <div class="videoPlayer mb-2">
                                <iframe width="100%" height="200px"
                                    src="https://www.youtube.com/embed/v3dJmCrsN3o?si=vwvUhLJb4ZRtYyMq?showinfo=0"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="videoPlayer mb-2">
                                <iframe width="100%" height="200px"
                                    src="https://www.youtube.com/embed/v3dJmCrsN3o?si=vwvUhLJb4ZRtYyMq?showinfo=0"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="videoPlayer mb-2">
                                <iframe width="100%" height="200px"
                                    src="https://www.youtube.com/embed/v3dJmCrsN3o?si=vwvUhLJb4ZRtYyMq?showinfo=0"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="mt-5 text-center footer">
                <p class="fw-bold">Powered by</p>
                <img src="{{ asset('/images/timespro-logo.svg') }}" alt="Timepro">
                <span>*Terms & Conditions Apply</span>
            </div>
        </footer>
    </body>
</html>
