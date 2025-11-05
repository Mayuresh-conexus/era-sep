@extends('layouts.app')



      <style>
/*          .main-slider__bg {*/
/*  position: relative;*/
/*  background-size: cover;*/
/*  background-position: center;*/
/*  background-repeat: no-repeat;*/
/*}*/

/* Add black overlay */
.main-slider__bg::before {
  content: "";
  position: absolute;
  inset: 0; /* shorthand for top, right, bottom, left: 0 */
  background: rgba(0, 0, 0, 0.5); /* 0.5 = 50% opacity */
  z-index: 1;
}

/* Ensure content stays above overlay */
.main-slider__content {
  position: relative;
  z-index: 2;
}
.category-one__social-media-list li h3{
        font-size: 12px !important;
}
.category-one__social-media-list{
    padding-left: 90px !important;
    margin-bottom: -20px !important;
}

.about-two__text{
        color: #523488;
}
.about-two__content h3{
     color: #523488;
}
.about-two__content p{
      color: #523488;
    
}
.section-title-two__title{
    color: #523488;
}
.about-two__client-two-content h4 a {
    color: #523488;
}
.about-two__client-two-content p{
    color: #533588;
}
.courses-two{
        background: linear-gradient(270deg, #573b97 0%, #3c286a 100%) !important;
}
.courses-two .section-title-two__tagline{
        color: #ffffff;
}
.blog-one .section-title__tagline, .blog-one .section-title__title .split-line, .blog-one .section-title__title span{
      color: #ffffff;
}
.section-title-two__title span{
        color: #fff !important;
   
    background-color: #573b97 !important;
}
.courses-two .section-title-two__title {
    color: #ffffff;
}
.blog-one{
        background: linear-gradient(270deg, #573b97 0%, #3c286a 100%) ;
}
  
  .blog-one__single{
        background-color: #fff !important;
  }
  
  .banner-two__btn-box:hover span{
      color: #fff !important;
  }
  
  
  </style>

@section('content')
  

        <!-- Banner Two Start -->
        <section class="banner-two" id="home">
            <div class="banner-two__shape-bg"
                style="background-image: url(assets/images/shapes/banner-two-shape-bg.png);"></div>
            <div class="banner-two__shape-box float-bob-y">
                <div class="banner-two__shape-1"></div>
            </div>
            <div class="banner-two__shape-2 img-bounce">
                <img src="assets/images/shapes/banner-two-shape-2.png" alt="">
            </div>
            <div class="banner-two__shape-3">
                <img src="assets/images/shapes/banner-two-shape-3.png" alt="">
            </div>
            <div class="banner-two__shape-4 shapemover">
                <img src="assets/images/shapes/banner-two-shape-4.png" alt="">
            </div>
            <div class="banner-two__shape-5 float-bob-y">
                <img src="assets/images/shapes/banner-two-shape-5.png" alt="">
            </div>
            <div class="banner-two__shape-6 rotate-me">
                <img src="assets/images/shapes/banner-two-shape-6.png" alt="">
            </div>
            <div class="banner-two__shape-7 float-bob-y"></div>
            <div class="banner-two__shape-8 float-bob-x"></div>
            <div class="banner-two__edu-icon shapemover">
                <img src="assets/images/icon/banner-two-edu-icon.png" alt="">
            </div>
            <div class="banner-two__book-icon img-bounce">
                <img src="assets/images/icon/banner-two-book-icon.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="banner-two__left">
                            <p class="banner-two__sub-title">#Once a Rosarian, Always a Rosarian!</p>
                            <h2 class="banner-two__title">Together<span> Beyond School. </span> </h2>
                            <p class="banner-two__text">Empowering Alumni. Enriching Lives.</p><br>
                            <p class="banner-two__text" ><b>Welcome to the Ex-Rosarians Association!</b><br>
A vibrant community of former students, teachers, and staff of Rosary High School, ERA brings together the legacy of learning, friendship, and service. Through social events, professional programs, and intellectual engagements, we continue to honor our roots while creating new stories together</p>
                            
                            <div class="banner-two__btn-and-success-student-box">
                                <div class="banner-two__btn-box">
                                    <a href="register.php" class="thm-btn-two">
                                        <span>Get Started</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                    <div class="banner-two__btn-box">
                                    <a href="https://businessstagingw4w.in/era/get-involved.php" class="thm-btn-two">
                                        <span>Get Involved </span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                                <div class="banner-two__success-student">
                                    <!--<ul class="list-unstyled banner-two__success-student-list">-->
                                    <!--    <li>-->
                                    <!--        <div class="banner-two__success-student-img">-->
                                    <!--            <img src="assets/images/pcst.jpg"-->
                                    <!--                alt="">-->
                                    <!--        </div>-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <div class="banner-two__success-student-img">-->
                                    <!--            <img src="assets/images/pcst.jpg"-->
                                    <!--                alt="">-->
                                    <!--        </div>-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <div class="banner-two__success-student-img">-->
                                    <!--            <img src="assets/images/pcst.jpg"-->
                                    <!--                alt="">-->
                                    <!--        </div>-->
                                    <!--    </li>-->
                                    <!--</ul>-->
                                    <!--<div class="banner-two__success-student-content">-->
                                    <!--    <div class="banner-two__success-student-count-box">-->
                                    <!--        <p class="odometer" data-count="2000">00</p>-->
                                    <!--        <span>+</span>-->
                                    <!--    </div>-->
                                    <!--    <p class="banner-two__success-student-text">Success Student</p>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="banner-two__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="banner-two__video-icon-box">
                                        <!--<div class="banner-two__video-icon-inner">-->
                                        <!--    <div class="banner-two__video-icon">-->
                                        <!--        <span class="fa fa-play"></span>-->
                                        <!--        <i class="ripple"></i>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="banner-two__right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="banner-two__content-one">
                                        <div class="banner-two__content-one-img">
                                            <img src="assets/images/01_NEW.jpg" alt="">
                                        </div>
                                        <div class="banner-two__course-discount">
                                            <div class="banner-two__course-discount-img">
                                                <img src="assets/images/h4.jpg"
                                                    alt="">
                                                <p class="banner-two__course-discount-rate">Heritage  </p>
                                            </div>
                                            <div class="banner-two__course-discount-content">
                                                <h4 class="banner-two__course-discount-title"><a
                                                        href="">Rosary Reconnect: <br>Back to School Day</a></h4>
                                                <!--<p class="banner-two__course-discount-price">Forever Connected</p>-->
                                                <!--<div class="banner-two__course-discount-rating">-->
                                                <!--    <p class="banner-two__course-discount-rating-text">5.50/-->
                                                <!--        <span>14</span> </p>-->
                                                <!--    <div class="banner-two__course-discount-star">-->
                                                <!--        <span class="icon-star"></span>-->
                                                <!--        <span class="icon-star"></span>-->
                                                <!--        <span class="icon-star"></span>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <div class="banner-two__course-discount-arrow">
                                                    <a href=""><span
                                                            class="icon-angles-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="banner-two__content-two">
                                        <div class="banner-two__content-two-img">
                                            <img src="assets/images/02_NEW.jpg" alt="">
                                        </div>
                                        <div class="banner-two__experience-box">
                                            <div class="banner-two__experience-box-inner">
                                                <div class="banner-two__experience-icon">
                                                    <img src="assets/images/icon/banner-two-experience-icon.png" alt="">
                                                </div>
                                                <div class="banner-two__experience-count-box">
                                                    <div class="banner-two__experience-count">
                                                        <h3 class="odometer" data-count="25">00</h3>
                                                        <span>+</span>
                                                        <p>Years</p>
                                                    </div>
                                                    <p>of experience</p>
                                                </div>
                                            </div>
                                            <div class="banner-two__experience-box-shape"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner Two End -->




       <!--About Two Start -->
        <section class="about-two">
            <div class="about-two__bg-shape"
                style="background-image: url(assets/images/shapes/about-two-bg-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="assets/images/abht.png" alt="">
                                </div>
                                <div class="about-two__shape-1">
                                    <img src="assets/images/shapes/about-two-shape-1.png" alt="">
                                </div>
                                <div class="about-two__shape-2">
                                    <img src="assets/images/shapes/about-two-shape-2.png" alt="">
                                </div>
                                <div class="about-two__shape-3 rotate-me">
                                    <img src="assets/images/shapes/about-two-shape-3.png" alt="">
                                </div>
                              <!--   <div class="about-two__client-box">
                                    <p class="about-two__client-text">“It is a long established fact that a reader will
                                        be distracted by the readable content of a page when looking at its layout.”</p>
                                    <div class="about-two__client-info">
                                        <div class="about-two__client-img">
                                            <img src="https://laravel-fistudy.unicktheme.com/assets/images/929.jpg" alt="">
                                        </div>
                                        <div class="about-two__client-content">
                                            <h3>Alisa Oliva</h3>
                                            <p>Web Designer</p>
                                        </div>
                                        <div class="about-two__client-quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="about-two__class-day">
                                    <div class="about-two__class-day-icon">
                                        <img src="assets/images/icon/about-two-class-day-icon.png" alt="">
                                    </div>
                                    <h3 class="about-two__class-title">Live Interactive Classes</h3>
                                    <ul class="about-two__class-list list-unstyled">
                                        <li>
                                            <p>Saturday</p>
                                            <span>10:00 - 16:00</span>
                                        </li>
                                        <li>
                                            <p>Sunday</p>
                                            <span>10:00 - 16:00</span>
                                        </li>
                                        <li>
                                            <p>Monday</p>
                                            <span>10:00 - 16:00</span>
                                        </li>
                                        <li>
                                            <p>Tuesday</p>
                                            <span>10:00 - 16:00</span>
                                        </li>
                                        <li>
                                            <p>Wednesday</p>
                                            <span>10:00 - 16:00</span>
                                        </li>
                                    </ul>
                                    <div class="about-two__class-btn-box">
                                        <a href="" class="thm-btn"><span
                                                class="icon-circle-left"></span>Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__right">
                            <div class="section-title-two text-left sec-title-animation animation-style2">
                                <div class="section-title-two__tagline-box">
                                    <div class="section-title-two__tagline-shape">
                                        <img src="assets/images/shapes/section-title-two-shape-1.png" alt="">
                                    </div>
                                    <span class="section-title-two__tagline">Our Story</span>
                                </div>
                                <h2 class="section-title-two__title title-animation">Passion Behind the Vibes</span>
                                </h2>
                            </div>
                            <p class="about-two__text">ERA is where ex-Rosarians reconnect, recharge, and rise together. From your favorite bench spot to the school annual day stage, we’ve shared it all — and now we’re building the future, together. The Ex-Rosarians Association is a purpose-led platform uniting past students and staff of Rosary High School. Anchored in shared values and driven by impact, we foster meaningful engagement across generations.</p>
                            <ul class="about-two__points-list list-unstyled">
                                <li>
                                    <div class="about-two__icon">
                                       
                                        <img src="assets/images/connection.png" alt="">
                                    </div>
                                    <div class="about-two__content">
                                        <h3>Stay Connected</h3>
                                        <p>We host chill reunions, teacher appreciation events, and collaborate with the school to keep the vibe going strong. With events celebrating our legacy and initiatives supporting future leaders, we stay firmly rooted in Rosary’s values.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__icon">
                                        <img src="assets/images/target.png" alt="">
                                    </div>
                                    <div class="about-two__content">
                                        <h3>Make a Real Impact</h3>
                                        <p>Want to mentor juniors? Launch a talk session? Join a project? This is your space to contribute, grow, and shine. Our focus is to create long-term impact through mentorship, career guidance, community service, and institutional support.</p>
                                    </div>
                                </li>
                              <!--   <li>
                                    <div class="about-two__icon">
                                        <img src="assets/images/icon/about-two-points-icon-3.png" alt="">
                                    </div>
                                    <div class="about-two__content">
                                        <h3>We Build a Thriving Community </h3>
                                        <p>ERA Alumni fosters lifelong friendships and professional networks. With active groups, discussion boards, and reunions, staying in touch is just the beginning.
                                        </p>
                                    </div>
                                </li> -->
                            </ul>
                            <div class="about-two__client-and-btn-box">
                                <div class="about-two__client-info-2">
                                    <div class="about-two__client-two-img">
                                        <img src="assets/images/open-email.png" alt="">
                                    </div>
                                    <div class="about-two__client-two-content">
                                        <p>Have a Questions</p>
                                        <h4><a href="mailto:era@exrosarians.com">era@exrosarians.com</a></h4>
                                    </div>
                                </div>
                                <div class="about-two__btn-box">
                                    <a href="our-story.php" class="thm-btn-two">
                                        <span>Read More</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End -->


        <!-- Category One Start -->
        <section class="category-one">
            <div class="category-one__bg-shape"></div>
            <!--<div class="category-one__shape-1">-->
            <!--    <img src="assets/images/shapes/category-one-shape-1.png" alt="">-->
            <!--</div>-->
            <!--<div class="category-one__shape-2">-->
            <!--    <img src="assets/images/shapes/category-one-shape-2.png" alt="">-->
            <!--</div>-->
            <!--<div class="category-one__shape-3">-->
            <!--    <img src="assets/images/shapes/category-one-shape-3.png" alt="">-->
            <!--</div>-->
            <div class="category-one__social-media">
                <ul class="category-one__social-media-list list-unstyled">
                    <li>
                        <h3>Community</h3>
                    </li>
                    <li>
                        <img src="assets/images/shapes/category-one-social-media-shape-1.png" alt="">
                    </li>
                    <li>
                        <h3>Knowledge</h3>
                    </li>
                    <li>
                        <img src="assets/images/shapes/category-one-social-media-shape-1.png" alt="">
                    </li>
                    <li>
                        <h3>Service</h3>
                    </li>
                     <li>
                        <img src="assets/images/shapes/category-one-social-media-shape-1.png" alt="">
                    </li>
                       <li>
                        <h3>Integrity</h3>
                    </li>
                     <li>
                        <img src="assets/images/shapes/category-one-social-media-shape-1.png" alt="">
                    </li>
                          <li>
                        <h3>Growth</h3>
                    </li>
                </ul>
            </div>
            <!-- <div class="category-one__brand-box">
                <ul class="category-one__brand-list list-unstyled">
                    <li>
                        <div class="category-one__brand">
                            <img src="assets/images/brand/category-one-brand-1-1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="category-one__brand">
                            <img src="assets/images/brand/category-one-brand-1-2.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="category-one__brand">
                            <img src="assets/images/brand/category-one-brand-1-3.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="category-one__brand">
                            <img src="assets/images/brand/category-one-brand-1-4.png" alt="">
                        </div>
                    </li>
                </ul>
            </div> -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="category-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">Programs</span>
                                </div>
                                <h2 class="section-title__title title-animation">Delivering Value Through Our Programs</h2>
                            </div>
                            <ul class="category-one__category-list list-unstyled">
                                <li>
                                    <div class="category-one__count-and-arrow">
                                        <div class="category-one__count-box">
                                            <div class="category-one__count"></div>
                                            <div class="category-one__count-content">
                                                <h3><a href="">Social </a></h3>
                                                <p>Community service, reunions, celebrations</p>
                                            </div>
                                        </div>
                                        <div class="category-one__count-arrow">
                                            <a href=""><span
                                                    class="icon-arrow-up-right-2"></span></a>
                                        </div>
                                    </div>
                                    <div class="category-one__hover-icon-and-arrow">
                                        <div class="category-one__hover-icon-box">
                                            <div class="category-one__hover-icon">
                                                <img src="assets/images/icon/category-one-hover-icon-1-1.png" alt="">
                                            </div>
                                            <div class="category-one__hover-content">
                                                <h3><a href="">Social</a></h3>
                                                <p>Community service, reunions, celebrations. </p>
                                            </div>
                                        </div>
                                        <div class="category-one__hover-arrow">
                                            <a href="programs.php"><span
                                                    class="icon-arrow-up-right-2"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-one__count-and-arrow">
                                        <div class="category-one__count-box">
                                            <div class="category-one__count"></div>
                                            <div class="category-one__count-content">
                                                <h3><a href="">Professional</a></h3>
                                                <p>Career guidance, workshops, networking.</p>
                                            </div>
                                        </div>
                                        <div class="category-one__count-arrow">
                                            <a href=""><span
                                                    class="icon-arrow-up-right-2"></span></a>
                                        </div>
                                    </div>
                                    <div class="category-one__hover-icon-and-arrow">
                                        <div class="category-one__hover-icon-box">
                                            <div class="category-one__hover-icon">
                                                <img src="assets/images/icon/category-one-hover-icon-1-1.png" alt="">
                                            </div>
                                            <div class="category-one__hover-content">
                                                <h3><a href="">Professional</a></h3>
                                                <p>Career guidance, workshops, networking.</p>
                                            </div>
                                        </div>
                                        <div class="category-one__hover-arrow">
                                            <a href="programs.php"><span
                                                    class="icon-arrow-up-right-2"></span></a>
                                        </div>
                                    </div>
                                </li>
                            
                                <li>
                                    <div class="category-one__count-and-arrow">
                                        <div class="category-one__count-box">
                                            <div class="category-one__count"></div>
                                            <div class="category-one__count-content">
                                                <h3><a href="">Intellectual</a></h3>
                                                <p>Guest lectures, panel discussions, mentoring. </p>
                                            </div>
                                        </div>
                                        <div class="category-one__count-arrow">
                                            <a href=""><span
                                                    class="icon-arrow-up-right-2"></span></a>
                                        </div>
                                    </div>
                                    <div class="category-one__hover-icon-and-arrow">
                                        <div class="category-one__hover-icon-box">
                                            <div class="category-one__hover-icon">
                                                <img src="assets/images/icon/category-one-hover-icon-1-1.png" alt="">
                                            </div>
                                            <div class="category-one__hover-content">
                                                <h3><a href="">Intellectual</a></h3>
                                                <p>Guest lectures, panel discussions, mentoring.</p>
                                            </div>
                                        </div>
                                        <div class="category-one__hover-arrow">
                                            <a href="programs.php"><span
                                                    class="icon-arrow-up-right-2"></span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="category-one__right">
                            <div class="category-one__img">
                                <img src="assets/images/Services Image 03_NEW_01.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category One End -->



    
    <!-- Why Choose One Start -->
        <section class="why-choose-one">
            <div class="why-choose-one__shape-6 float-bob-x">
                <!--<img src="assets/images/shapes/why-choose-one-shape-6.png" alt="">-->
            </div>
            <div class="why-choose-one__shape-7 float-bob-y">
                <!--<img src="assets/images/shapes/why-choose-one-shape-7.png" alt="">-->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="why-choose-one__img-box">
                                <div class="why-choose-one__img">
                                    <img src="assets/images/05_NEW.jpg" alt="">
                                </div>
                                <div class="why-choose-one__img-2">
                                    <img src="assets/images/04_NEW.jpg" alt="" style="height:300px">
                                </div>
                                <div class="why-choose-one__shape-1 float-bob-y">
                                    <img src="assets/images/shapes/why-choose-one-shape-1.png" alt="">
                                </div>
                                <div class="why-choose-one__shape-2 float-bob-x">
                                    <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
                                </div>
                                <div class="why-choose-one__shape-3 float-bob-y">
                                    <img src="assets/images/shapes/why-choose-one-shape-3.png" alt="">
                                </div>
                                <div class="why-choose-one__shape-4">
                                    <img src="assets/images/shapes/why-choose-one-shape-4.png" alt="">
                                </div>
                                <div class="why-choose-one__shape-5 img-bounce">
                                    <img src="assets/images/shapes/why-choose-one-shape-5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">Built on Giving Back</span>
                                </div>
                                <h2 class="section-title__title title-animation">Discover How Alumni & Sponsors Make a Difference</h2>
                            </div>
                            <p class="why-choose-one__text">With the generosity of our alumni and community partners, ERA continues to organize meaningful events, empower students, and give back to Rosary High School. Every contribution — whether time, talent, or treasure — creates an impact that lasts for generations.</p>
                            <div class="why-choose-one__points-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <ul class="why-choose-one__points-list list-unstyled">
                                            <li>
                                                <div class="why-choose-one__points-icon-inner">
                                                    <div class="why-choose-one__points-icon">
                                                        <img src="assets/images/right--arrow.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-choose-one__points-content">
                                                    <h3>Flexible Donations</h3>
                                                    <p>Contribute online with a one-time gift or a recurring pledge — every amount counts toward building opportunities.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-one__points-icon-inner">
                                                    <div class="why-choose-one__points-icon">
                                                        <img src="assets/images/right--arrow.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-choose-one__points-content">
                                                    <h3>Support a Child</h3>
                                                    <p>Support students in need through uniforms, school supplies, tuition fees, or scholarships.</p>
                                                </div>
                                            </li>
                                             <li>
                                                <div class="why-choose-one__points-icon-inner">
                                                    <div class="why-choose-one__points-icon">
                                                        <img src="assets/images/right--arrow.png" alt="">
                                                    </div>
                                                </div>
                                              <div class="why-choose-one__points-content">
                                                    <h3>Sponsor an Event or Project</h3>
                                                    <p>Fund alumni meets, cultural programs, or special initiatives that keep the Rosary spirit alive.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <ul class="why-choose-one__points-list list-unstyled">
                                            <li>
                                                <div class="why-choose-one__points-icon-inner">
                                                    <div class="why-choose-one__points-icon">
                                                        <img src="assets/images/right--arrow.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-choose-one__points-content">
                                                    <h3>Give In Kind</h3>
                                                    <p>Books, gifts, learning materials, or services — your resources help students and teachers thrive.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-one__points-icon-inner">
                                                    <div class="why-choose-one__points-icon">
                                                        <img src="assets/images/right--arrow.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-choose-one__points-content">
                                                    <h3>Volunteer Your Time</h3>
                                                    <p>Be a mentor, event coordinator, or workshop host — your experience can inspire and guide. </p>
                                                </div>
                                            </li>
                                              <li>
                                                <div class="why-choose-one__points-icon-inner">
                                                    <div class="why-choose-one__points-icon">
                                                        <img src="assets/images/right--arrow.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-choose-one__points-content">
                                                    <h3>Recognition & Transparency</h3>
                                                    <p>•	Regular updates to show how your support is being used. <br>
•	Acknowledgment in alumni newsletters and events.
•	Digital certificates to honor your contribution.
</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="why-choose-one__btn-and-client-box">
                                <div class="why-choose-one__btn-box">
                                    <a href="get-involved.php" class="why-choose-one__btn thm-btn"><span
                                            class="icon-angles-right"></span>Get Involved Today </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose One End -->



         
   <!--Courses Two Start -->
   
        
        
        
         <section class="courses-two">
            <div class="container">
                 <div class="section-title-two text-left sec-title-animation animation-style2">
                    <div class="section-title-two__tagline-box">
                        <div class="section-title-two__tagline-shape">
                            <img src="assets/images/shapes/section-title-two-shape-1.png" alt="">
                        </div>
                        <span class="section-title-two__tagline">Throwback Moments</span>
                    </div>
                    <h2 class="section-title-two__title title-animation">Relive the moments that shaped our bond
                    </h2>
                </div>
                <div class="courses-two__inner">
                    <!--<ul class="courses-two__filter style1 post-filter list-unstyled clearfix">-->
                    <!--    <li data-filter=".filter-item" class="active">-->
                    <!--        <p></span>All</p>-->
                    <!--    </li>-->
                    <!--    <li data-filter=".design">-->
                    <!--        <p>Organised for Rasarians</p>-->
                    <!--    </li>-->
                    <!--    <li data-filter=".programming">-->
                    <!--        <p>Social and local</p>-->
                    <!--    </li>-->
                    <!--    <li data-filter=".programming">-->
                    <!--        <p>Upcoming</p>-->
                    <!--    </li>-->
                     
                    <!--</ul>-->
                    <div class="row filter-layout">
                        <!--Courses Two Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item design design">
                            <div class="courses-two__single">
                                <div class="courses-two__img-box">
                                    <div class="courses-two__img">
                                        <img src="assets/images/IMG_5287.JPG" alt="">
                                    </div>
                                   
                                </div>
                                <div class="courses-two__content">
                                    <div class="courses-two__doller-and-review">
                                        <div class="courses-two__doller">
                                            <p>₹240.00</p>
                                        </div>
                                        <div class="courses-two__review">
                                            <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                        </div>
                                    </div>
                                    <h3 class="courses-two__title"><a href="">Getting Started with
                                            Computers and Beginner's Guide to Basic Skills</a></h3>
                                    <div class="courses-two__btn-and-client-box">
                                        <div class="courses-two__btn-box">
                                            <a href="" class="thm-btn-two">
                                                <span>Book Now</span>
                                                <i class="icon-angles-right"></i>
                                            </a>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <!--Courses Two Single End-->
                            <!--Courses Two Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item design programming">
                            <div class="courses-two__single">
                                <div class="courses-two__img-box">
                                    <div class="courses-two__img">
                                        <img src="assets/images/IMG_5422.JPG" alt="">
                                    </div>
                                   
                                </div>
                                <div class="courses-two__content">
                                    <div class="courses-two__doller-and-review">
                                        <div class="courses-two__doller">
                                            <p>₹240.00</p>
                                        </div>
                                        <div class="courses-two__review">
                                            <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                        </div>
                                    </div>
                                    <h3 class="courses-two__title"><a href="">Getting Started with
                                            Computers and Beginner's Guide to Basic Skills</a></h3>
                                    <div class="courses-two__btn-and-client-box">
                                        <div class="courses-two__btn-box">
                                            <a href="" class="thm-btn-two">
                                                <span>Book Now</span>
                                                <i class="icon-angles-right"></i>
                                            </a>
                                        </div>
                                     
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!--Courses Two Single End-->

                              <!--Courses Two Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item design design">
                            <div class="courses-two__single">
                                <div class="courses-two__img-box">
                                    <div class="courses-two__img">
                                        <img src="assets/images/IMG_5427.JPG" alt="">
                                    </div>
                                   
                                </div>
                                <div class="courses-two__content">
                                    <div class="courses-two__doller-and-review">
                                        <div class="courses-two__doller">
                                            <p>₹240.00</p>
                                        </div>
                                        <div class="courses-two__review">
                                            <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                        </div>
                                    </div>
                                    <h3 class="courses-two__title"><a href="">Getting Started with
                                            Computers and Beginner's Guide to Basic Skills</a></h3>
                                    <div class="courses-two__btn-and-client-box">
                                        <div class="courses-two__btn-box">
                                            <a href="" class="thm-btn-two">
                                                <span>Book Now</span>
                                                <i class="icon-angles-right"></i>
                                            </a>
                                        </div>
                                      
                                    </div>
                               
                                </div>
                            </div>
                        </div>

                        <!--Courses Two Single End-->
                      
                      
                       
                    </div>
                </div>
            </div>
        </section>
        <!--Courses Two End -->


 <!--Why Choose Two Start -->
        <section class="why-choose-two">
            <div class="why-choose-two__shape-5 shapemover">
                <img src="assets/images/shapes/why-choose-two-shape-5.png" alt="">
            </div>
            <div class="why-choose-two__shape-6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-two__left">
                            <div class="section-title-two text-left sec-title-animation animation-style2">
                                <div class="section-title-two__tagline-box">
                                    <div class="section-title-two__tagline-shape">
                                        <img src="assets/images/shapes/section-title-two-shape-1.png" alt="">
                                    </div>
                                    <span class="section-title-two__tagline">Why Join ERA?</span>
                                </div>
                                <h2 class="section-title-two__title title-animation">Discover Why ERA is More Than an Alumni Network — It’s a Family.
                                </h2>
                            </div>
                            <div class="why-choose-two__left-content-box">
                                <div class="why-choose-two__shape-1"></div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="why-choose-two__left-content">
                                            <!--Why Choose Two Single Start -->
                                            <div class="why-choose-two__single wow fadeInUp" data-wow-delay="100ms">
                                                <div class="why-choose-two__icon">
                                                    <img src="assets/images/icon/why-choose-two-icon-1.png" alt="">
                                                </div>
                                                <h3 class="why-choose-two__title"><a href=""> We Celebrate Our Legacy Together</a></h3>
                                                <p></p>
                                                <ul class="list-unstyled why-choose-two__points">
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        
                                                        
                                                   
                                                        <p class="why-choose-two__points-text">Annual reunions and milestone gatherings</p>
                                                    </li>
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text">Teacher appreciation and cultural celebrations</p>
                                                    </li>
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text">Sports meets and family-friendly events</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--Why Choose Two Single End -->
                                            <!--Why Choose Two Single Start -->
                                            <div class="why-choose-two__single wow fadeInUp" data-wow-delay="200ms">
                                                <div class="why-choose-two__icon">
                                                    <img src="assets/images/icon/why-choose-two-icon-2.png" alt="">
                                                </div>
                                                <h3 class="why-choose-two__title"><a href="">We Build a Supportive Community</a></h3>
                                                <ul class="list-unstyled why-choose-two__points">
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text">Alumni mentoring circles for students</p>
                                                    </li>
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text"></p>Recognition of alumni achievements through spotlights</p>
                                                    </li>
                                                      <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text"></p>Volunteering opportunities to give back to society and the school</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--Why Choose Two Single End -->
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="why-choose-two__video-box">
                                            <!--Why Choose Two Single Start -->
                                            <div class="why-choose-two__single wow fadeInUp" data-wow-delay="300ms">
                                                <div class="why-choose-two__icon">
                                                    <img src="assets/images/icon/why-choose-two-icon-3.png" alt="">
                                                </div>
                                                <h3 class="why-choose-two__title"><a href="">We Create Opportunities That Matter</a></h3>
                                                <ul class="list-unstyled why-choose-two__points">
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text">Career guidance and mentorship programs for students</p>
                                                    </li>
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text"> Networking and collaboration across industries</p>
                                                    </li>
                                                    <li>
                                                        <div class="why-choose-two__points-icon">
                                                            <img src="assets/images/icon/check-icon.png" alt="">
                                                        </div>
                                                        <p class="why-choose-two__points-text"> Scholarships and sponsorship drives for Rosarians</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--Why Choose Two Single End -->
                                            <!--<div class="why-choose-two__video">-->
                                            <!--    <div class="why-choose-two__video-link">-->
                                            <!--        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"-->
                                            <!--            class="video-popup">-->
                                            <!--            <div class="why-choose-two__video-icon">-->
                                            <!--                <span class="fa fa-play"></span>-->
                                            <!--                <i class="ripple"></i>-->
                                            <!--            </div>-->
                                            <!--        </a>-->
                                            <!--    </div>-->
                                            <!--    <div class="why-choose-two__video-content">-->
                                            <!--        <h4>Join the ERA Alumni Movement </h4>-->
                                                    <!-- <p>Leadership & entrepreneurship training</p> -->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-two__right">
                            <div class="why-choose-two__shape-box">
                                <div class="why-choose-two__shape-2">
                                    <div class="why-choose-two__shape-3">
                                        <div class="why-choose-two__shape-4 float-bob-y">
                                            <img src="assets/images/shapes/why-choose-two-shape-4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="why-choose-two__dot-1">
                                <img src="assets/images/shapes/why-choose-two-dot-1.png" alt="">
                            </div>
                            <div class="why-choose-two__dot-2">
                                <img src="assets/images/shapes/why-choose-two-dot-2.png" alt="">
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-two__right-content-one">
                                        <div class="why-choose-two__right-content-one-user-details">
                                            <div class="why-choose-two__right-content-one-user-details-top">
                                                <div class="why-choose-two__right-content-one-user-details-top-shape-bg"
                                                    style="background-image: url(assets/images/shapes/why-choose-two-right-content-one-user-details-top-shape-bg.png);">
                                                </div>
                                                <div class="why-choose-two__right-content-one-user-details-top-img">
                                                    <img src="assets/images/why1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="why-choose-two__right-content-one-user-details-bottom">
                                                  <div class="why-choose-two__right-content-two-user-details-icon">
                                                    <img src="assets/images/icon/why-choose-two-right-content-two-user-details-icon.png"
                                                        alt="">
                                                </div>
                                                <div class="why-choose-two__right-content-one-user-details-content">
                                                    <h5>Sarah Amanda</h5>
                                                    <p>Education Consultant</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="why-choose-two__student-trained">
                                            <div class="why-choose-two__student-trained-shape-1"></div>
                                            <ul class="list-unstyled why-choose-two__student-trained-list">
                                                <li>
                                                    <div class="why-choose-two__student-trained-img">
                                                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/testimonial/testimonial-1-3.JPG"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__student-trained-img">
                                                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/testimonial/testimonial-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__student-trained-img">
                                                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/testimonial/testimonial-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__student-trained-img">
                                                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/testimonial/testimonial-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="why-choose-two__student-trained-count-box">
                                                <div class="why-choose-two__student-trained-count-box-inner count-box">
                                                    <p class="count-text" data-stop="100" data-speed="3000">00</p>
                                                    <span>+</span>
                                                </div>
                                                <p class="why-choose-two__student-trained-text">Programs That Create Impact</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-two__right-content-two">
                                       <!--  <div class="why-choose-two__udemy-review">
                                            <div class="why-choose-two__udemy-review-img">
                                                <img src="assets/images/resources/why-choose-two-udemy-review-img.jpg"
                                                    alt="">
                                            </div>
                                            <div class="why-choose-two__udemy-review-logo">
                                                <img src="assets/images/resources/why-choose-two-udemy-review-logo.png"
                                                    alt="">
                                            </div>
                                            <div class="why-choose-two__udemy-review-client-info">
                                                <p class="why-choose-two__udemy-review-client-name">Alisa Olivia/</p>
                                                <div class="why-choose-two__udemy-review-star">
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                    <span class="icon-star"></span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="why-choose-two__right-content-two-user-details">
                                            <div class="why-choose-two__right-content-two-user-details-top">
                                                <div class="why-choose-two__right-content-two-user-details-top-shape-bg"
                                                    style="background-image: url(assets/images/shapes/why-choose-two-right-content-one-user-details-top-shape-bg.png);">
                                                </div>
                                                <div class="why-choose-two__right-content-two-user-details-top-img">
                                                    <img src="assets/images/why2.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="why-choose-two__right-content-two-user-details-bottom">
                                                <div class="why-choose-two__right-content-two-user-details-icon">
                                                    <img src="assets/images/icon/why-choose-two-right-content-two-user-details-icon.png"
                                                        alt="">
                                                </div>
                                                <div class="why-choose-two__right-content-two-user-details-content">
                                                    <h5>Yash Oleson</h5>
                                                    <p>Tech Entrepreneur</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Two End -->
  <!-- Blog One Start -->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape"></div>
                        <span class="section-title__tagline">ERA Pulse </span>
                    </div>
                    <h2 class="section-title__title title-animation">Stories, insights, and ideas from Our Alumni</h2>
                </div>
                <div class="blog-one__carousel owl-theme owl-carousel">
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/IMG_5518.JPG" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>August 25,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-comment"></span>250 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">Unlocking the Future of
                                        Education: How LMS Transforms Learning </a></h3>
                                <p class="blog-one__text">This blog explores the transformative impact of Learning
                                    Management Systems (LMS) on modern education.</p>
                                <div class="blog-one__btn-and-user-box">
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="thm-btn"><span
                                                class="icon-angles-right"></span>Read More</a>
                                    </div>
                                    <div class="blog-one__user-box">
                                        <div class="blog-one__user-img">
                                            <img src="assets/images/fev.png" alt="">
                                        </div>
                                        <div class="blog-one__user-content">
                                            <h5 class="blog-one__user-name">WayForWeb</h5>
                                            <!-- <p class="blog-one__user-sub-title">Tech Specialist</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single End -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/IMG_5326.JPG" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>April 18,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-comment"></span>250 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">Leveraging LMS for Workforce
                                        Development</a></h3>
                                <p class="blog-one__text">This blog explores the transformative impact of Learning
                                    Management Systems (LMS) on modern education.</p>
                                <div class="blog-one__btn-and-user-box">
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="thm-btn"><span
                                                class="icon-angles-right"></span>Read More</a>
                                    </div>
                                    <div class="blog-one__user-box">
                                        <div class="blog-one__user-img">
                                            <img src="assets/images/fev.png" alt="">
                                        </div>
                                        <div class="blog-one__user-content">
                                            <h5 class="blog-one__user-name">WayForWeb</h5>
                                            <!-- <p class="blog-one__user-sub-title">UI Designer</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single End -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/IMG_5421.JPG" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>September 01,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-comment"></span>250 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">Key Features and Considerations
                                        for Educational Institutions</a></h3>
                                <p class="blog-one__text">This blog explores the transformative impact of Learning
                                    Management Systems (LMS) on modern education.</p>
                                <div class="blog-one__btn-and-user-box">
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="thm-btn"><span
                                                class="icon-angles-right"></span>Read More</a>
                                    </div>
                                    <div class="blog-one__user-box">
                                        <div class="blog-one__user-img">
                                            <img src="assets/images/fev.png" alt="">
                                        </div>
                                        <div class="blog-one__user-content">
                                            <h5 class="blog-one__user-name">WayForWeb</h5>
                                            <!-- <p class="blog-one__user-sub-title">Tech Specialist</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single End -->
                  
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/IMG_5291.JPG" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>April 18,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-comment"></span>250 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">Leveraging LMS for Workforce
                                        Development</a></h3>
                                <p class="blog-one__text">This blog explores the transformative impact of Learning
                                    Management Systems (LMS) on modern education.</p>
                                <div class="blog-one__btn-and-user-box">
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="thm-btn"><span
                                                class="icon-angles-right"></span>Read More</a>
                                    </div>
                                    <div class="blog-one__user-box">
                                        <div class="blog-one__user-img">
                                            <img src="assets/images/fev.png" alt="">
                                        </div>
                                        <div class="blog-one__user-content">
                                            <h5 class="blog-one__user-name">WayForWeb</h5>
                                            <!-- <p class="blog-one__user-sub-title">UI Designer</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single End -->
                    <!-- Blog One Single Start -->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/IMG_5223.JPG" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>September 01,
                                            2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-comment"></span>250 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">Key Features and Considerations
                                        for Educational Institutions</a></h3>
                                <p class="blog-one__text">This blog explores the transformative impact of Learning
                                    Management Systems (LMS) on modern education.</p>
                                <div class="blog-one__btn-and-user-box">
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="thm-btn"><span
                                                class="icon-angles-right"></span>Read More</a>
                                    </div>
                                    <div class="blog-one__user-box">
                                        <div class="blog-one__user-img">
                                            <img src="assets/images/fev.png" alt="">
                                        </div>
                                        <div class="blog-one__user-content">
                                            <h5 class="blog-one__user-name">WayForWeb</h5>
                                            <!-- <p class="blog-one__user-sub-title">Tech Specialist</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog One Single End -->
                    <!-- Blog One Single Start -->
                  
                </div>
            </div>
        </section>
        <!-- Blog One End -->
    

      

        <!--Contact Info One Start -->
        <section class="contact-info-one">
            <div class="container">
                <ul class="list-unstyled contact-info-one__list">
                    <li>
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <span class="icon-envelope"></span>
                            </div>
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__sub-title">Email Address:</p>
                                <h5 class="contact-info-one__email"><a
                                        href="mailto:era@exrosarians.com">era@exrosarians.com</a></h5>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__sub-title">Phone Number</p>
                                <h5 class="contact-info-one__email"><a href="tel:001239957689">+91 555 55 55</a>
                                </h5>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__sub-title">Our Address</p>
                                <h5 class="contact-info-one__email">Mazgaon, Mumbai - 400010</h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Contact Info One End -->


@endsection