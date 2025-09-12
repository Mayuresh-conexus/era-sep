@extends('layouts.app')

@section('content')


   <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
       <link rel="stylesheet" href="assets/css/module-css/gallery.css" />
   <!--<style>-->
   <!-- .page-header{-->
   <!--     margin-top:150px;-->
   <!-- }-->
   <!-- </style>-->

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
                    <h2>Gallery</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>




        <section class="gallery-page">
            <div class="container">
                  <style>
    /*body{font-family:Arial, sans-serif;margin:0;padding:30px;background:#f5f7fa;color:#222}*/
    .wrap{max-width:1200px;margin:0 auto}
    h1{margin-bottom:20px}

    .tabs{display:flex;gap:8px;overflow:auto;margin-bottom:20px}
    .tab{padding:8px 14px;border-radius:20px;background:#eee;cursor:pointer;border:none}
    .tab.active{background:#222;color:#fff}

    .panel{display:none;gap:20px}
    .panel.active{display:grid;grid-template-columns:1fr 400px}

    .main-card{border-radius:12px;overflow:hidden;position:relative}
    .main-card img{width:100%;display:block;height:100%;object-fit:cover}
    .main-meta{position:absolute;left:15px;bottom:15px;background:rgba(0,0,0,0.6);color:#fff;padding:8px 12px;border-radius:8px}

    .gallery{display:grid;grid-template-columns:repeat(2,1fr);gap:10px}
    .thumb{border-radius:10px;overflow:hidden;cursor:pointer}
    .thumb img{width:100%;display:block;aspect-ratio:1.3/1;object-fit:cover;    height: 260px;}

    /* Responsive */
    /*@media(max-width:900px){*/
    /*  .panel{grid-template-columns:1fr}*/
    /*  .gallery{grid-template-columns:repeat(3,1fr);margin-top:12px}*/
    /*}*/
    /*@media(max-width:500px){*/
    /*  .gallery{grid-template-columns:repeat(2,1fr)}*/
    /*}*/
      /* Responsive */
  @media(min-width: 992px) {
    .panel.active {
      flex-wrap: nowrap;
    }
    .main-card {
      flex: 1 1 60%;
    }
    .gallery {
      flex: 1 1 40%;
      margin-top: 0;
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(max-width: 991px) and (min-width: 601px) {
    .gallery {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  @media(max-width: 600px) {
    .gallery {
      grid-template-columns: repeat(2, 1fr);
      
    }
    .panel.active{
            grid-template-columns: inherit !important;
    }
  }

    /* Lightbox */
    .lightbox{position:fixed;inset:0;background:rgba(0,0,0,0.8);display:none;align-items:center;justify-content:center;z-index:1000}
    .lightbox img{max-width:90%;max-height:85%;border-radius:12px}
    .lightbox.show{display:flex}
    .close-btn{position:absolute;top:20px;right:20px;font-size:24px;color:#fff;background:none;border:none;cursor:pointer}
  </style>
 <div class="wrap">
  <div class="section-title text-center sec-title-animation animation-style1">
                  
                   <h2 class="section-title__title title-animation">ERA Gallery<img src="assets/images/shapes/section-title-shape-1.png" alt=""></span></h2>
                   </div>
    <!-- Tabs -->
    <div class="tabs">
      <button class="tab active" data-target="y2024">2024</button>
      <button class="tab" data-target="y2023">2023</button>
      <button class="tab" data-target="y2022">2022</button>
    </div>

    <!-- Panels -->
    <div id="y2024" class="panel active">
      <div class="main-card">
        <img src="assets/images/gallery/g1.jpg" alt="2024 cover">
        <div class="main-meta">Events 2024</div>
      </div>
      <div class="gallery">
        <div class="thumb"><img src="assets/images/gallery/g2.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g3.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g4.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g5.jpg" alt=""></div>
      </div>
    </div>

    <div id="y2023" class="panel">
      <div class="main-card">
        <img src="assets/images/gallery/g6.jpg" alt="2023 cover">
        <div class="main-meta">Highlights 2023</div>
      </div>
      <div class="gallery">
        <div class="thumb"><img src="assets/images/gallery/g7.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g8.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g1.jpg" alt=""></div>
      </div>
    </div>

    <div id="y2022" class="panel">
      <div class="main-card">
        <img src="assets/images/gallery/g8.jpg" alt="2022 cover">
        <div class="main-meta">Gallery 2022</div>
      </div>
      <div class="gallery">
        <div class="thumb"><img src="assets/images/gallery/g1.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g6.jpg" alt=""></div>
        <div class="thumb"><img src="assets/images/gallery/g7.jpg" alt=""></div>
      </div>
    </div>
  </div>

  <!-- Lightbox -->
  <div class="lightbox" id="lightbox">
    <button class="close-btn">✕</button>
    <img src="" alt="">
  </div>

  <script>
    // Tab switch
    document.querySelectorAll('.tab').forEach(tab=>{
      tab.addEventListener('click', ()=>{
        document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
        document.querySelectorAll('.panel').forEach(p=>p.classList.remove('active'));
        tab.classList.add('active');
        document.getElementById(tab.dataset.target).classList.add('active');
      });
    });

    // Lightbox
    const lb=document.getElementById('lightbox');
    const lbImg=lb.querySelector('img');
    document.querySelectorAll('.thumb img').forEach(img=>{
      img.addEventListener('click', ()=>{
        lbImg.src=img.src;
        lb.classList.add('show');
      });
    });
    lb.querySelector('.close-btn').addEventListener('click',()=>lb.classList.remove('show'));
    lb.addEventListener('click',e=>{if(e.target===lb) lb.classList.remove('show')});
  </script>
                <!--<div class="row masonary-layout" style="position: relative; height: 1255.88px;">-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 0px; top: 0px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-1.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-1.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 389px; top: 0px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-2.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-2.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 779px; top: 0px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-3.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-3.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 1168px; top: 0px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-4.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-4.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 0px; top: 418px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-5.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-5.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 779px; top: 418px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-6.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-6.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 1168px; top: 418px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-7.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-7.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-6 col-lg-6 col-md-6" style="position: absolute; left: 0px; top: 837px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-8.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-8.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--    Gallery Page Single Start-->
                <!--    <div class="col-xl-3 col-lg-6 col-md-6" style="position: absolute; left: 779px; top: 837px;">-->
                <!--        <div class="gallery-page__single">-->
                <!--            <div class="gallery-page__img">-->
                <!--                <div class="gallery-page__img-box">-->
                <!--                    <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-9.jpg" alt="">-->
                <!--                </div>-->
                <!--                <div class="gallery-page__icon">-->
                <!--                    <a class="img-popup" href="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/gallery/gallery-page-1-9.jpg"><span class="icon-plus"></span></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    Gallery Page Single End-->
                <!--</div>-->
            </div>
        </section>


        <section class="newsletter-two">
            <div class="container">
                <div class="newsletter-two__inner">
                    <div class="newsletter-two__img">
                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/resources/newsletter-two-img-1.png" alt="">
                    </div>
                    <div class="newsletter-two__inner-content">
                        <div class="newsletter-two__shape-bg" style="background-image: url(https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/newsletter-two-shape-bg.png);"></div>
                        <div class="newsletter-two__like">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/newsletter-two-like.png" alt="">
                        </div>
                        <div class="newsletter-two__title-box">
                            <h3 class="newsletter-two__title">Subscribe our <span>Newsletter</span></h3>
                            <p class="newsletter-two__text">Explore a diverse selection of courses all in one platform,
                                <br>
                                designed to cater to various learning</p>
                        </div>
                        <div class="newsletter-two__form-box">
                            <form class="newsletter-two__form">
                                <div class="newsletter-two__input">
                                    <input type="email" placeholder="Enter Your Email">
                                </div>
                                <button type="submit" class="newsletter-two__btn"> <span class="icon-arrow-circle"></span>
                                    Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection