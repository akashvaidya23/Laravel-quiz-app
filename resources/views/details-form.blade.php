<!DOCTYPE html>
<html lang="en">

<head>
    <title>Timepro | Career Carnival</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <header>
        <nav class="navbar" id="navbar">
            <div class="container d-block">
                <div class="position-relative text-center">
                    <a href="/choose-game" class="backArrow">
                        <img src="{{ asset('/images/arrow-left.png') }}">
                    </a>
                    <h4 class="mb-0">Fill Your Details</h4>
                </div>
            </div>
        </nav>
    </header>

    <div class="pageBody">
        <section>
            <div class="container py-5">
                <p class="smallTxt mb-4">Enter your credentials to proceed</p>
                <form method="post" action="#" id="userDeatilsForm">
                    @csrf
                    <input type="hidden" name="sector_id" id="sector_id" value={{$id}}>
                    <div class="form-field">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Email ID<span>*</span></label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                    </div>
                    <div class="form-field">
                        <label for="phoneNum">Phone Number<span>*</span></label>
                        <input type="number" id="phoneNum" name="phoneNum" placeholder="Enter your phone number" class="form-control" required>
                    </div>
                    <!-- <button class="blueBtn w-100 mt-4" type="submit">Proceed</button> -->
                    <div>
                        <div class="checkbox-groupwrap">
                            <label class="checkbox-group">I agree to the <a href="terms-and-conditions.html">Terms and Conditions</a> & the <a href="https://timespro.com/privacy-policy">Privacy Policy</a>.
                                <input type="checkbox" id="terms">
                                <span class="checkmark"></span>
                              </label>
                        </div>
                        <div class="checkbox-groupwrap">
                            <label class="checkbox-group">Yes, I would like to receive updates via WhatsApp'
                                <input type="checkbox" id="whatsApp_alerts">
                                <span class="checkmark"></span>
                              </label>
                        </div>
                    </div>
                </form>
                
                <button class="blueBtn submit-details w-100 mt-4">Proceed</button>
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
<!-- <script type="text/javascript" src="{{ asset('/js/detail-form.js') }}"></script> -->
<script src="{{ asset('/js/script.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>