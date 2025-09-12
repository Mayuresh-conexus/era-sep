@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
  <style>
  .about-page {
  /*font-family: 'Arial', sans-serif;*/
  color: #333;
  padding: 50px 20px;
  background-color: #f9f9f9;
}

.about-page h1 {
  text-align: center;
  margin-bottom: 40px;
  font-size: 2.5em;
  color: #2c3e50;
}

.committee-section {
  margin-bottom: 40px;
}

.committee-section h2 {
  border-bottom: 2px solid #03075e;
  padding-bottom: 10px;
  margin-bottom: 20px;
  color: #03075e;
}

.member-card {
  background: #fff;
  padding: 15px 20px;
  margin-bottom: 10px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.member-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.member-card h3 {
  margin: 0;
  font-size: 1.2em;
  color: #2c3e50;
}

.member-card p {
  margin: 5px 0 0 0;
  font-size: 1em;
  color: #555;
}

/* Responsive */
@media(max-width: 768px) {
  .about-page {
    padding: 30px 15px;
  }

  .about-page h1 {
    font-size: 2em;
  }
}

    .page-header{
        margin-top:0px;
    }
     .cards-container {
    display: flex;
    flex-wrap: wrap;           /* Allow cards to wrap to the next row */
    gap: 20px;                 /* Space between cards */
    /*max-width: 1200px;         */
    margin: auto;              /* Center container */
    justify-content: flex-start; /* First row aligned left */
}

.cards-container .card {
    
    max-width: 360px;          /* Prevent cards from growing too big */
}

/* Optional: center last row if it has fewer items */
.cards-container {
    justify-content: center;   /* This will center last row automatically */
}
    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
    }
    .card-content {
      padding: 20px;
    }
    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }
    .card-text {
      font-size: 14px;
      color: #666;
      line-height: 1.6;
    }
    </style>
        <!--Page Header Start-->
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
                    <h2>About Us</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Three Start-->
        <section class="about-three">
            <div class="about-three__shape-2 rotate-me"></div>
            <div class="about-three__shape-3 text-rotate-box"></div>
            <div class="about-three__shape-4 float-bob-y"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-three__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-three__shape-1 img-bounce">
                                <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/about-three-shape-1.png" alt="">
                            </div>
                            <div class="about-three__img-box">
                                <div class="about-three__img-one">
                                    <img src="assets/images/Image01.jpg" alt="">
                                </div>
                                <div class="about-three__img-two">
                                    <img src="assets/images/Image02.jpg" alt="" style="    height: 400px;">
                                </div>
                                <div class="about-three__experience-box">
                                    <div class="about-three__experience-box-inner">
                                        <div class="about-three__experience-icon">
                                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/icon/about-three-experience-icon.png" alt="">
                                        </div>
                                        <div class="about-three__experience-count-box">
                                            <div class="about-three__experience-count">
                                                <h3 class="odometer" data-count="25">00</h3>
                                                <span>+</span>
                                                <p>Years</p>
                                            </div>
                                            <p>of experience</p>
                                        </div>
                                    </div>
                                    <div class="about-three__experience-box-shape"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-three__right">
                            <div class="section-title-two text-left sec-title-animation animation-style2">
                                <div class="section-title-two__tagline-box">
                                    <div class="section-title-two__tagline-shape">
                                        <img src="assets/images/shapes/section-title-two-shape-1.png" alt="">
                                    </div>
                                    <span class="section-title-two__tagline">About Us</span>
                                </div>
                                <h2 class="section-title-two__title title-animation">Who can attend?</h2>
                            </div>
                            <p class="about-three__text-1">Any ex-student of Rosary High School, Dockyard, Mazgaon even if he/she has left the school before completeing std X
Any ex-staff (teachers and administration) are also eligible to be a part of the alumni meet</p>
                            <div class="about-three__mission-vission">
                                <div class="about-three__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#mission" class="tab-btn active-btn"><span>Our Mission</span></li>
                                        <li data-tab="#vission" class="tab-btn"><span>Our Vision</span></li>
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="mission">
                                            <div class="tabs-content__inner">
                                                <ul class="list-unstyled about-three__mission-vission-list">
                                                    <li>
                                                        <div class="about-three__mission-vission-content">
                                                            <!--<h4 class="about-three__mission-vission-title">It provides-->
                                                            <!--    tools for course creation</h4>-->
                                                            <p class="about-three__mission-vission-text">To build a dynamic, engaged alumni network and support the development of Rosary High School students and  by extension, the surrounding community. 
.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="about-three__mission-vission-content">
                                                            <!--<h4 class="about-three__mission-vission-title">Many LMS-->
                                                            <!--    platforms include collaborative </h4>-->
                                                            <!--<p class="about-three__mission-vission-text">collaborative-->
                                                            <!--    features such as discussion forums, messaging, and group-->
                                                            <!--    projects, which facilitate interaction and communication-->
                                                            <!--    among learners</p>-->
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="vission">
                                            <div class="tabs-content__inner">
                                                <ul class="list-unstyled about-three__mission-vission-list">
                                                    <li>
                                                        <div class="about-three__mission-vission-content">
                                                            <!--<h4 class="about-three__mission-vission-title">It provides-->
                                                            <!--    tools for course creation</h4>-->
                                                            <p class="about-three__mission-vission-text">Working on</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!--<div class="about-three__mission-vission-content">-->
                                                        <!--    <h4 class="about-three__mission-vission-title">Many LMS-->
                                                        <!--        platforms include collaborative </h4>-->
                                                        <!--    <p class="about-three__mission-vission-text">collaborative-->
                                                        <!--        features such as discussion forums, messaging, and group-->
                                                        <!--        projects, which facilitate interaction and communication-->
                                                        <!--        among learners</p>-->
                                                        <!--</div>-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--tab-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Why Choose Three Start-->
        <section class="why-choose-three">
            <div class="why-choose-three__shape-1 img-bounce"></div>
            <div class="container">
                <div class="row">
                        <div class="section-title text-center sec-title-animation animation-style1">
                  
                   <h2 class="section-title__title title-animation">Our Founding Principles<img src="assets/images/shapes/section-title-shape-1.png" alt=""></span></h2>
                   </div>
                   
  <div class="cards-container">
    <!-- Card 1 -->
    <div class="card">
      <img src="assets/images/bb1.jpeg" alt="Image 1">
      <div class="card-content">
        <h3 class="card-title">Community</h3>
        <p class="card-text">To foster lifelong bonds between alumni, students, faculty, and the school, creating a strong network that thrives on mutual support and shared values.</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="assets/images/bb2.jpeg" alt="Image 2">
      <div class="card-content">
        <h3 class="card-title">Knowledge</h3>
        <p class="card-text">To encourage and promote learning beyond classrooms by organising workshops and activities. To inspire future generations by providing mentorship, educational resources and exchange of experiences. </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <img src="assets/images/bb3.jpeg" alt="Image 3">
      <div class="card-content">
        <h3 class="card-title">Service</h3>
        <p class="card-text">To give back through goodwill initiatives, scholarships and rewards, thereby support and uplift the student community and society. To value and support the contributions of retired teachers and staff.</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <img src="assets/images/bb4.jpeg" alt="Image 4">
      <div class="card-content">
        <h3 class="card-title">Integrity</h3>
        <p class="card-text">To create a legacy by working with transparency and accountability, ensuring that every action reflects the values instilled by our alma mater.
</p>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="card">
      <img src="assets/images/bb5.jpeg" alt="Image 5">
      <div class="card-content">
        <h3 class="card-title">Growth</h3>
        <p class="card-text"> To be committed to the continuous growth of ERA and its initiatives.</p>
      </div>
    </div>
  </div>
                </div>
            </div>
        </section>
        
        
        
        <section class="about-page">
  <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
                  
                   <h2 class="section-title__title title-animation">Behind the Scenes - Committee Members<img src="assets/images/shapes/section-title-shape-1.png" alt=""></span></h2>
                   </div>
                   

    <div class="committee-section">
      <h2>Executive Members</h2>
      <div class="member-card">
        <h3>President</h3>
        <p>Mr. Alok Kumar Kailash Gupta</p>
      </div>
      <div class="member-card">
        <h3>Vice President</h3>
        <p>Mr. Asif Abdulla Thakur</p>
      </div>
      <div class="member-card">
        <h3>Secretary</h3>
        <p>Ms. Veenita Vijay Kamble</p>
      </div>
      <div class="member-card">
        <h3>Joint Secretary</h3>
        <p>Mr. Zaheer Abbas Shabanali Hemani</p>
      </div>
      <div class="member-card">
        <h3>Treasurer</h3>
        <p>Mr. Nadeem Mohammed Mulla</p>
      </div>
      <div class="member-card">
        <h3>Joint Treasurer</h3>
        <p>Ms. Afreen Salim Mazgaonkar</p>
      </div>
    </div>

    <div class="committee-section">
      <h2>Members</h2>
      <div class="member-card">
        <p>1. Mr. Vipul Chunilal Hingu</p>
      </div>
      <div class="member-card">
        <p>2. Ms. Tanveer Usman Das</p>
      </div>
      <div class="member-card">
        <p>3. Ms. Shifa Shoukat Satkut</p>
      </div>
      <div class="member-card">
        <p>4. Mr. Adnan Aslam Khan</p>
      </div>
    </div>

    <div class="committee-section">
      <h2>Faculty Member</h2>
      <p>Details about faculty member here (if any).</p>
    </div>
  </div>
</section>

 
@endsection