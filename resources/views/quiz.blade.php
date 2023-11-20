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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <header>
        <input type="hidden" name="hidden_questions" id="hidden_questions" value="{{ $questions->toJson() }}">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{Session::get('user_id')}}">
        <nav class="navbar" id="navbar">
            <div class="container d-block">
                <div class="position-relative text-center">
                    <a href="/select-sector" class="backArrow">
                        <img src="{{ asset('/images/arrow-left.png') }}">
                    </a>
                    <h4 class="mb-0">Quiz</h4>
                </div>
            </div>
        </nav>
    </header>

    <div class="pageBody">
        <section>
            <div class="container py-5 mb-5">

                <div class="quiz_body">
                    <p class="smallTxt mb-0">
                        Question <span id="attemptedQs"></span> / <span id="totalQs"></span>
                    </p> 
                    <div id="stepList" class="mb-3">
                    </div>
                    <dive class="d-flex justify-content-between align-items-center mb-5">
                        <dive class="scoreInfo">
                            <span>Score</span> <span id='score'></span>
                            <input type="hidden" name="total_score" id="total_score">
                        </dive>
                        <div class="timerInfo">
                            <img src="{{ asset('images/timer-icon.svg') }}" class="d-inline-block me-2">
                            <span id="timer">0:15</span>
                        </div>
                    </dive>
                    <div id="questions" class="questionBox">
                        <!-- questions added dynamically -->
                    </div>

                    <button id="btn-next" class="blueBtn w-100 mt-5" onclick="next()">Next Question</button>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src=" {{ asset ('/js/script.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{ asset('/js/quiz.js') }}"></script>

</html>