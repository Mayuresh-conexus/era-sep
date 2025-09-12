@extends('layouts.app')

@section('content')


   <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
       <link rel="stylesheet" href="assets/css/module-css/gallery.css" />
   <!--<style>-->
   <!-- .page-header{-->
   <!--     margin-top:150px;-->
   <!-- }-->
   <!-- </style>-->
   
   <style>
       .courses-two__filter {
      display: flex;
    gap: 10px;
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
    flex-direction: row;
    padding: 9px;
}

.courses-two__filter::-webkit-scrollbar {
  display: none; /* hide scrollbar in Chrome/Safari */
}

.courses-two__filter li {
  flex: 0 0 auto; /* prevent shrinking */
  min-width: max-content; /* ensure items don't cut off */
}
   </style>

<section class="page-header">
            <div class="page-header__bg" style="background-image: url(https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-bg-shape.png);">
            </div>
            <div class="page-header__shape-4">
                <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-4.png" alt="">
            </div>
            <div class="page-header__shape-5">
                <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-5.png" alt="">
            </div>
            <div class="page-header__social">
                <a href="#">Facebook</a>
                <span>//</span>
                <a href="#">Instagram</a>
                <span>//</span>
                <a href="#">LinkedIn</a>
                <span>//</span>
                <a href="#">Twitter</a>
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__img">
                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/resources/page-header-img-1.png" alt="">
                        <div class="page-header__shape-1">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-1.png" alt="">
                        </div>
                        <div class="page-header__shape-2">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-2.png" alt="">
                        </div>
                        <div class="page-header__shape-3">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-3.png" alt="">
                        </div>
                    </div>
                    <h2>Events</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>




   <!--Courses Two Start -->
        <section class="courses-two">
            <div class="container">
                <div class="section-title-two text-left sec-title-animation animation-style2">
                    <div class="section-title-two__tagline-box">
                        <div class="section-title-two__tagline-shape">
                            <img src="assets/images/shapes/section-title-two-shape-1.png" alt="">
                        </div>
                        <span class="section-title-two__tagline">Our Events</span>
                    </div>
                    <!--<h2 class="section-title-two__title title-animation">Don’t Miss Our <span> Latest Events!</span>-->
                    <!--</h2>-->
                </div>
                <div class="courses-two__inner">
                    <ul class="courses-two__filter style1 post-filter list-unstyled clearfix">
                        <li data-filter=".filter-item" class="active">
                            <p></span>All</p>
                        </li>
                        <li data-filter=".design">
                            <p>Organised for Rasarians</p>
                        </li>
                        <li data-filter=".programming">
                            <p>Social and local</p>
                        </li>
                        <li data-filter=".programming">
                            <p>Upcoming</p>
                        </li>
                     
                    </ul>
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


@endsection