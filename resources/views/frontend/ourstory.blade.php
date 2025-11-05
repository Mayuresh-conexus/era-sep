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
    .category-one__right{
            margin-right: 75px  !important;
                margin-left: 0px  !important;
    }
    .why-choose-three  p{
        font-family: "Outfit", sans-serif !important;
            font-size: 16px;
    margin-top: 10px;

    }
    .why-choose-three{
        background: linear-gradient(270deg, #573b97 0%, #3c286a 100%) !important;
    }
    .vision-mission-box {
  max-width: 900px;
  background-color: #ffffff;
  padding: 40px 30px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.vision-mission-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

.vision-mission-box h3 {
  font-size: 1.8rem;
  color: #2c3e50;
  margin-bottom: 15px;
}

.vision-mission-box p {
  font-size: 1rem;
  color: #555;
  line-height: 1.7;
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
            <!--<div class="page-header__social">-->
            <!--    <a href="#">Facebook</a>-->
            <!--    <span>//</span>-->
            <!--    <a href="#">Instagram</a>-->
            <!--    <span>//</span>-->
            <!--    <a href="#">LinkedIn</a>-->
            <!--    <span>//</span>-->
            <!--    <a href="#">Twitter</a>-->
            <!--</div>-->
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
                    <h2>Our Story</h2>
                    <!--<div class="thm-breadcrumb__box">-->
                    <!--    <ul class="thm-breadcrumb list-unstyled">-->
                    <!--        <li><a href="index.html">Home</a></li>-->
                    <!--        <li><span>//</span></li>-->
                    <!--        <li>About Us</li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
        <!--Page Header End-->


<!-- Our Story Section -->
<section class="about-three section-space">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="about-three__thumb wow fadeInLeft" data-wow-delay="100ms">
          <img src="assets/images/freepik-alumini.jpg" alt="Ex-Rosarians Association" class="img-fluid rounded-3">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-three__content wow fadeInRight" data-wow-delay="200ms">
          <h3 class="section-title">Rooted in rosary high school, United for Life</h3>
          <p>
            Rosary High School gave us more than an education — it gave us friendships, values, and memories that shaped who we are today.
            The Ex-Rosarians Association (ERA) carries that spirit forward, uniting alumni across years, professions, and countries.
          </p>
          <p>
            What started as classmates sharing benches, corridors, and annual day stages has grown into a global family of Rosarians.
            We are doctors, artists, entrepreneurs, engineers, teachers, and leaders — but above all, we remain Rosarians at heart.
          </p>
          <p class="fw-bold">ERA is where belonging finds new meaning.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Vision & Mission -->
<section class="why-choose-three section-space bg-light">
  <div class="container">
    <div class="vision-mission-box mx-auto p-4 p-lg-5 rounded-4 shadow-lg bg-white text-center">
      <h3 class="section-title mb-3">Our Vision</h3>
      <p class="mb-4">
        To nurture a lifelong community where Rosarians remain connected, inspired, and united in their commitment 
        to uplift each other and the world around them.
      </p>
      <h3 class="section-title mb-3">Our Mission</h3>
      <p>
        To foster meaningful connections among alumni by celebrating our shared heritage, honoring our mentors, 
        and creating opportunities for mentorship, professional growth, and community service — keeping Rosary’s values alive across generations.
      </p>
    </div>
  </div>
</section>


<!-- Community Section -->
<section class="about-three section-space">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h3>A Community that Connects and Gives Back</h3>
    </div>
    <div class="row gy-4">
      <div class="col-lg-12">
        <p>
          The Ex-Rosarians Association is more than just an alumni network — it is a community built on gratitude, connection, and impact.
          We come together to:
        </p>
        <ul class="list-unstyled ms-3">
          <li>• Celebrate our shared heritage through reunions and school events.</li>
          <li>• Honor the mentors and teachers whose guidance shaped our lives.</li>
          <li>• Create opportunities for mentorship, career guidance, and professional growth.</li>
          <li>• Give back to Rosary and to society through projects, collaborations, and service.</li>
        </ul>
        <p>
          Through every initiative — whether it’s an appreciation event, a career talk, or a social project —
          we reaffirm the values Rosary instilled in us: <strong>respect, service, and excellence.</strong>
        </p>
        <p>
          ERA is not only about remembering where we come from, but also about building bridges for future generations.
          Together, we carry the Rosary spirit forward — <strong>strong, vibrant, and timeless.</strong>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Founding Principles -->

<!-- Founding Principles -->
<section class="why-choose-three section-space bg-light">
  <div class="container text-center">
    <h3 class="section-title mb-5" style="color:#fff !important;">Our Founding Principles</h3>
    <div class="row gy-4 justify-content-center">

      <!-- Community -->
      <div class="col-md-4 col-lg-2">
        <div class="icon-box p-3 rounded-4 shadow-sm bg-white h-100">
          <div class="mb-3 text-primary">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M7 21v-2a4 4 0 0 1 3-3.87"></path>
              <circle cx="12" cy="7" r="4"></circle>
              <path d="M5.5 17a4.5 4.5 0 0 1-4.5-4.5V12a4.5 4.5 0 0 1 4.5-4.5"></path>
              <path d="M18.5 17a4.5 4.5 0 0 0 4.5-4.5V12a4.5 4.5 0 0 0-4.5-4.5"></path>
            </svg>
          </div>
          <h5>Community</h5>
          <p>Lifelong bonds that unite alumni, students, teachers, and Rosary forever.</p>
        </div>
      </div>

      <!-- Knowledge -->
      <div class="col-md-4 col-lg-2">
        <div class="icon-box p-3 rounded-4 shadow-sm bg-white h-100">
          <div class="mb-3 text-primary">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
              <path d="M4 4h16v13H4z"></path>
              <path d="M4 8h16"></path>
            </svg>
          </div>
          <h5>Knowledge</h5>
          <p>Sharing wisdom beyond classrooms through mentorship and learning.</p>
        </div>
      </div>

      <!-- Service -->
      <div class="col-md-4 col-lg-2">
        <div class="icon-box p-3 rounded-4 shadow-sm bg-white h-100">
          <div class="mb-3 text-primary">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21V8a2 2 0 0 0-2-2h-4V3h-4v3H6a2 2 0 0 0-2 2v13"></path>
              <rect x="2" y="10" width="20" height="10" rx="2"></rect>
            </svg>
          </div>
          <h5>Service</h5>
          <p>Giving back with gratitude to uplift students, teachers, and society.</p>
        </div>
      </div>

      <!-- Integrity -->
      <div class="col-md-4 col-lg-2">
        <div class="icon-box p-3 rounded-4 shadow-sm bg-white h-100">
          <div class="mb-3 text-primary">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2l7 4v6c0 5-3.5 9.5-7 10-3.5-.5-7-5-7-10V6l7-4z"></path>
            </svg>
          </div>
          <h5>Integrity</h5>
          <p>Leading with honesty, transparency, and accountability in all we do.</p>
        </div>
      </div>

      <!-- Growth -->
      <div class="col-md-4 col-lg-2">
        <div class="icon-box p-3 rounded-4 shadow-sm bg-white h-100">
          <div class="mb-3 text-primary">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 17l6-6 4 4 8-8"></path>
              <path d="M14 7h7v7"></path>
            </svg>
          </div>
          <h5>Growth</h5>
          <p>Evolving together to build a stronger ERA with each passing year.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Team Section -->
<section class="team-three section-space">
  <div class="container">
    <div class="row align-items-center gy-4">
      <!-- Left Column: Text -->
      <div class="col-lg-6">
        <div class="team-three__content">
          <div class="section-title mb-4">
            <h3>The Pillars of Our Community</h3>
            <p>
            Behind every reunion, initiative, and celebration lies the dedication of Rosarians who give their time, energy, and passion to keep our bond alive. For over a decade, our association has thrived because of the tireless efforts of volunteers who embody the true spirit of giving back.<br>
From the pioneers who organized the first grand alumni meet in 2015, to the fresh energy driving the 2025 team, each committee member has carried forward the legacy of service and connection. Their leadership is the heartbeat of ERA and a living example of what it means to be Rosarian.

            </p>
          </div>

          <h4 class="mb-2">ERA Committee 2025–2026</h4>
          <p><strong>President:</strong> Mr. Alok Kumar Kailash Gupta</p>
          <p><strong>Vice President:</strong> Mr. Asif Abdulla Thakur</p>

          <h5 class="mt-3">Executive Team</h5>
          <ul class="list-unstyled ms-3">
            <li>• Secretary: Ms. Veenita Vijay Kamble</li>
            <li>• Joint Secretary: Mr. Zaheer Abbas Shabanali Hemani</li>
            <li>• Treasurer: Mr. Nadeem Mohammed Mulla</li>
            <li>• Joint Treasurer: Ms. Afreen Salim Mazgaonkar</li>
          </ul>

          <h5 class="mt-3">Committee Members</h5>
          <ul class="list-unstyled ms-3">
            <li>• Mr. Vipul Chunilal Hingu</li>
            <li>• Ms. Tanveer Usman Das</li>
            <li>• Ms. Shifa Shoukat Satkut</li>
            <li>• Mr. Adnan Aslam Khan</li>
          </ul>

          <h5 class="mt-3">Faculty Members</h5>
          <ul class="list-unstyled ms-3">
            <li>• Father</li>
            <li>• Sister Vijaya</li>
            <li>• Ms. Beena</li>
          </ul><br>
<p>Every Rosarian has a story to tell and a legacy to share. Join the Ex-Rosarians Association and be part of a community that celebrates our past, strengthens our present, and shapes the future together. Whether you graduated last year or decades ago, you have a place here…. </p>
          <div class="mt-4 text-start">
            <a href="register.php" class="thm-btn">Join Us</a>
            <p class="mt-2 fst-italic">Once a Rosarian, Always a Rosarian.</p>
          </div>
        </div>
      </div>

      <!-- Right Column: Image -->
      <div class="col-lg-6">
        <div class="team-three__thumb wow fadeInRight" data-wow-delay="200ms">
            <img src="assets/images/story2.jpeg" alt="Ex-Rosarians Association" class="img-fluid rounded-3">
        </div>
      </div>
    </div>
  </div>
</section>

 
@endsection