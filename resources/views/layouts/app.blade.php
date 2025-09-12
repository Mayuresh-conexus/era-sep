<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Ex Rosarians Association </title>
    
<meta property="og:image" content="https://businessstagingw4w.in/era/assets/images/fev.png">
<meta property="og:url" content="https://businessstagingw4w.in/era/">
<!--<meta property="og:type" content="website">-->

   <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/fev.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/fev.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/fev.png') }}" />
<link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">

        
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-all.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/jquery.magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />

<!-- Module CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/module-css/banner.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/slider.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/sliding-text.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/category.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/about.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/courses.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/why-choose.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/live-class.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/video-one.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/blog.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/counter.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/team.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/newsletter.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/testimonial.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}" />

<!-- Template styles -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />


    <style type="text/css">
        .footer-widget-two__about-logo img{
            height: 125px;
        }
        /*.main-menu__logo img{*/
        /*    width: 80px;*/
        /*}*/
        .SliderMain{
            padding: 20px;
        }
    .SliderMain{
        max-width: 1450px !important;
    }
    .alumni-card {
      background: linear-gradient(180deg, #e2e9ff, #fff5db);
    padding: 30px 25px;
    border-radius: 8px;
    position: relative;
    max-width: 350px;
    color: #000;
}

.alumni-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 80px;
    background: url('top-wave.svg') no-repeat center/cover; /* Replace with your wave image */
}

.alumni-title {
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: normal;
}

.alumni-list {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
    font-size: 14px;
}

.alumni-list li {
    margin-bottom: 8px;
}
.owl-stage-outer .container{
    padding: 20px;
}
.register-btn {
    background: orange;
    padding: 10px 18px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    border-radius: 4px;
}
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->

    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- JS --}}
  <!-- Search Popup -->
<div class="search-popup">
    <div class="color-layer"></div>
    <button class="close-search"><span class="far fa-times fa-fw"></span></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required>
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Search Popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    <span class="scroll-to-top__text"> Go Back Top</span>
</a>

<!-- JS Scripts -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/marquee.min.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>

<script src="{{ asset('assets/js/gsap/gsap.js') }}"></script>
<script src="{{ asset('assets/js/gsap/ScrollTrigger.js') }}"></script>
<script src="{{ asset('assets/js/gsap/SplitText.js') }}"></script>

<!-- Template JS -->
<script src="{{ asset('assets/js/script.js') }}"></script>
