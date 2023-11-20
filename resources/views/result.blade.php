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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <!-- slick slider -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>
<body>
    <div class="pageBody">
        <section>
            <div class="scoreBoard">
                <h2 class="fw-normal">Hey {{$user_name}}!!!</span></h2>
                <div class="scoreCircle my-5">
                    <p class="mb-0">Your Score</p>
                    <span>{{ $points }}</span>
                    <div class="animateCircle" style="animation-delay: 0s"></div>
                    <div class="animateCircle" style="animation-delay: 0.5s"></div>
                </div>
                <div class="row gx-3 mb-4 justify-content-center">
                    <div class="col col-md-2">
                        <div class="scoreDetails">
                            <p class="smallTxt mb-0">Question</p>
                            <span>{{ $questions_count }}</span>
                        </div>
                    </div>
                    <div class="col col-md-2">
                        <div class="scoreDetails">
                            <p class="smallTxt mb-0">Correct</p>
                            <span>{{ $points }}</span>
                        </div>
                    </div>
                    <div class="col col-md-2">
                        <div class="scoreDetails">
                            <p class="smallTxt mb-0">Wrong</p>
                            <span>{{ $questions_count - $points }}</span>
                        </div>
                    </div>
                </div>
                <p class="voucherTxt">You have won discount voucher of </br><span class="fw-normal">₹</span><span>
                        2000/-</span></p>
            </div>

            <div class="container pt-4 pb-5 text-center">
                <p>Now that you've won, reach out to your nearest advisor to claim your rewards</p>
                <div class="voucherCode mb-4">
                    GDSDSHJ2D
                </div>
                <a href="#">
                    <button class="blueBtn w-100 mb-3">Claim</button>
                </a>
                <a href="#">
                    <button class="blueBtn blueLineBtn w-100">Play again to improve your score</button>
                </a>
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    jQuery(document).ready(function ($) {
        $('.customSlider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
        });

    });

    const videoControls = (el) => {
        // console.log('clicked')
        // $('video').each((i, vid) => {
        //     vid.pause()
        // });
        el.paused ? el.play() : el.pause();
        // el.controls = true;
        $(el).siblings('.videoBtn').fadeToggle();
    }
</script>
</html>