@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="assets/css/module-css/page-header.css" />
<link rel="stylesheet" href="assets/css/module-css/gallery.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

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
                    <h2>Programs</h2>
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
<section class="programs-hero">
  <div class="hero-content">
    <h1>Delivering Value Through Our Programs</h1>
    <p>We organize our work into three pillars so every Rosarian can find a place to connect, contribute, and grow.</p>
  </div>
  <div class="shape shape-1"></div>
  <div class="shape shape-2"></div>
</section>

<section class="program-card-section">
  <div class="container">

    <!-- Social Programs Card -->
    <div class="program-card">
      <div class="card-header">
        <h2>Social Programs</h2>
        <div class="corner-circle"></div>
      </div>
      <div class="card-body">
        <div class="intro-tagline">Staying Connected, Celebrating Together</div>
        <p class="intro-text">
          Rosary has always been more than a school — it’s a family. Our social programs are designed to keep that bond alive by bringing alumni, teachers, and students together.
        </p>

        <div class="what-we-do list-view">
          <h3>What We Do:</h3>
          <ul>
            <li>
              Annual Reunions & Alumni Meets
              <button class="info-btn" data-tooltip="Bringing ex-Rosarians together to reconnect.">i</button>
            </li>
            <li>
              Teacher Appreciation Events
              <button class="info-btn" data-tooltip="Celebrating and honoring mentors.">i</button>
            </li>
            <li>
              Community Service Days
              <button class="info-btn" data-tooltip="Tree planting, clean-up drives, donation campaigns.">i</button>
            </li>
            <li>
              Cultural Celebrations
              <button class="info-btn" data-tooltip="Participation in Independence Day, Annual Day, Sports Day, etc.">i</button>
            </li>
          </ul>
        </div>

        <div class="impact modern">
          <h3>Impact:</h3>
          <blockquote>
            “These programs strengthen friendships, preserve traditions, and create lasting memories — reminding every Rosarian that they’ll always have a home here.”
          </blockquote>
        </div>

        <a href="#" class="btn-full">Join our next reunion →</a>
        <p class="post-text"><em>Want to relive the nostalgia? Join our next reunion or volunteer for a community project.</em></p>
      </div>
    </div>

    <!-- Professional Programs Card -->
    <div class="program-card">
      <div class="card-header">
        <h2>Professional Programs</h2>
        <div class="corner-circle"></div>
      </div>
      <div class="card-body">
        <div class="intro-tagline">Guiding Careers, Building Futures</div>
        <p class="intro-text">
          Our professional programs are built to empower Rosarians in their career journeys — from students just starting out to seasoned alumni seeking new opportunities.
        </p>

        <div class="what-we-do list-view">
          <h3>What We Do:</h3>
          <ul>
            <li>
              Career Awareness Talks
              <button class="info-btn" data-tooltip="Alumni from different professions sharing their journeys.">i</button>
            </li>
            <li>
              Skill-Building Workshops
              <button class="info-btn" data-tooltip="Basics like communication, teamwork, digital literacy, and presentation skills.">i</button>
            </li>
            <li>
              Internship Pathways
              <button class="info-btn" data-tooltip="Senior alumni helping with workplace shadowing and visits.">i</button>
            </li>
            <li>
              Scholarship & Support Fund
              <button class="info-btn" data-tooltip="Alumni contributions toward needy students’ higher education.">i</button>
            </li>
            <li>
              Networking for Parents & Alumni
              <button class="info-btn" data-tooltip="Creating a bridge between alumni and current student families for guidance.">i</button>
            </li>
          </ul>
        </div>

        <div class="impact modern">
          <h3>Impact:</h3>
          <blockquote>
            “By leveraging the vast Rosarian network, we create opportunities for learning, growth, and career advancement — ensuring every Rosarian has the tools to succeed.”
          </blockquote>
        </div>

        <a href="#" class="btn-full">Sign up to mentor →</a>
        <p class="post-text"><em>Want to mentor a student or attend our next professional networking meet?</em></p>
      </div>
    </div>

    <!-- Intellectual Programs Card -->
    <div class="program-card">
      <div class="card-header">
        <h2>Intellectual Programs</h2>
        <div class="corner-circle"></div>
      </div>
      <div class="card-body">
        <div class="intro-tagline">Inspiring Minds, Sharing Knowledge</div>
        <p class="intro-text">
          Rosary taught us the value of curiosity and continuous learning. Our intellectual programs carry that legacy forward by creating spaces for dialogue, knowledge-sharing, and mentorship.
        </p>

        <div class="what-we-do list-view">
          <h3>What We Do:</h3>
          <ul>
            <li>
              Guest Lectures
              <button class="info-btn" data-tooltip="Alumni experts introducing new fields (tech, healthcare, arts, entrepreneurship).">i</button>
            </li>
            <li>
              Panel Discussions
              <button class="info-btn" data-tooltip="Conversations on ‘Careers of the Future’ and ‘Building Confidence.’">i</button>
            </li>
            <li>
              Mentorship Circles
              <button class="info-btn" data-tooltip="Small groups mentoring batches of Class 9–10 students.">i</button>
            </li>
            <li>
              Quiz & Debate Competitions
              <button class="info-btn" data-tooltip="Jointly hosted by alumni and the school to foster curiosity.">i</button>
            </li>
            <li>
              Alumni-Led Clubs
              <button class="info-btn" data-tooltip="Coding, art, drama, or leadership clubs mentored by ex-students.">i</button>
            </li>
          </ul>
        </div>

        <div class="impact modern">
          <h3>Impact:</h3>
          <blockquote>
            “These programs create a culture of lifelong learning, encouraging Rosarians to think big, stay inspired, and share wisdom across generations.”
          </blockquote>
        </div>

        <a href="#" class="btn-full">Be a speaker →</a>
        <p class="post-text"><em>Want to inspire others? Share your expertise.</em></p>
      </div>
    </div>

  </div>
</section>

<style>
  :root {
    --dark-purple: #573b97;
    --accent: #ffc224;
    --text: #333;
    --bg: #fff;
    --shape-light: rgba(255,255,255,0.1);
  }

  .programs-hero {
    position: relative;
    background: var(--dark-purple);
    color: #fff;
    text-align: center;
    padding: 5rem 1rem;
    overflow: hidden;
  }
  .programs-hero h1,
  .programs-hero p { color: #fff; }
  .shape {
    position: absolute;
    background: var(--shape-light);
    border-radius: 50%;
    transition: transform 0.6s ease;
  }
  .shape-1 { width: 200px; height: 200px; top: -50px; right: -50px; }
  .shape-2 { width: 300px; height: 300px; bottom: -80px; left: -80px; }
  .programs-hero:hover .shape-1 { transform: translate(50px, 50px) scale(1.2); }
  .programs-hero:hover .shape-2 { transform: translate(-50px, -50px) scale(1.1); }

  .program-card-section .container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px,1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 3rem auto;
    padding: 0 1rem;
  }
  .program-card {
    background: var(--bg);
    border-radius: 8px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s;
      overflow: visible !important;
  }
  .program-card:hover { transform: translateY(-4px); }

  .card-header {
    position: relative;
    background: var(--dark-purple);
    padding: 1.5rem;
  }
  .card-header h2 {
    margin: 0;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    font-size: 1.4rem;
  }
  .corner-circle {
    position: absolute;
    width: 100px; height: 100px;
    background: var(--shape-light);
    border-radius: 50%;
    top: -50px; right: -50px;
    transition: width 0.5s ease, height 0.5s ease, top 0.5s ease, right 0.5s ease;
  }
  .program-card:hover .corner-circle {
    width: 200%; height: 200%;
    top: -50%; right: -50%;
  }

  .card-body {
    padding: 1.5rem;
  }
  .intro-tagline {
    display: inline-block;
background: #ffbf18 !important;
    color: #fff;
    font-size: 0.85rem;
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    margin-bottom: 1rem;
  }
  .intro-text {
    margin-bottom: 1.5rem;
    font-size: 0.85rem;
    line-height: 1.6;
    /*color: var(--text);*/
  }

  .what-we-do.list-view h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-family: 'Poppins', sans-serif;
    color: #4f3283;
  }
  .what-we-do.list-view ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 1.5rem;
  }
  .what-we-do.list-view li {
    position: relative;
    margin-bottom: 0.75rem;
    padding-left: 1.6em;
    font-family: 'Open Sans', sans-serif;
    font-size: 0.85rem;
    font-weight: 600;
    /*color: var(--text);*/
  }
  .what-we-do.list-view li::before {
    content: '✔';
    position: absolute;
    left: 0; top: 0;
    color: #ffbc00;
    font-size: 1rem;
  }
  .info-btn {
    margin-left: 0.5em;
    background: #fff;
    border: none;
    border-radius: 50%;
    width: 1.2em; height: 1.2em;
    font-size: 0.85em;
    line-height: 1.2;
    color: var(--dark-purple);
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    cursor: pointer;
    position: relative;
    transition: background 0.3s, transform 0.3s;
  }
  .info-btn:hover {
    background: var(--accent);
    transform: scale(1.1);
    color: #333;
  }
.info-btn {
  position: relative;
  z-index: 20;
}

.info-btn:hover::after {
  content: attr(data-tooltip);
  position: fixed; /* instead of absolute */
  top: auto;
  left: 50%;
  transform: translate(-50%, -150%);
  background: #ffbf18;
  color: #533589;
  padding: 0.3em 0.6em;
  border-radius: 4px;
  white-space: nowrap;
  font-size: 11px;
  z-index: 9999;
  pointer-events: none;
}
  .impact.modern h3 {
    font-size: 16px;
    margin-bottom: 0.5rem;
  }
  .impact.modern blockquote {
    margin: 0 0 2rem;
    padding: 0.75rem 1rem;
    background: #f4f3f8;
    border-left: 3px solid #ffbc00;
    font-style: italic;
    /*color: var(--text);*/
    font-size: 0.85rem;
  }
  .impact.modern blockquote::before {
    font-size: 2.5rem;
  }

  .btn-full {
    display: block;
    width: 100%;
    padding: 0.75rem;
    background: #ffbf18;
    color: #ffffff;
    text-align: center;
    border-radius: 4px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.3s;
  }
  .btn-full:hover { background: #e6ac1b; }

  .post-text {
    margin-top: 0.75rem;
    font-size: 0.85rem;
    font-style: italic;
    /*color: var(--text);*/
    text-align: center;
  }
</style>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
</script>

@endsection