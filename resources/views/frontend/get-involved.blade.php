@extends('layouts.app')

@section('content')

 <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
  
  <style>
 
    .header {
        background: linear-gradient(270deg, #573b97 0%, #3c286a 100%) ;
        color: white;
        text-align: center;
        padding: 60px 20px;
    }
    .header h1 {
        margin: 0;
        font-size: 2.5em;
    }
    .header p {
        font-size: 1.2em;
        margin-top: 10px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    .header .cta-btn {
        margin-top: 20px;
        background-color: #ffffff;
        color: #523488;
        padding: 12px 25px;
        text-decoration: none;
        font-weight: 500;
        border-radius: 30px;
        display: inline-block;
        transition: 0.3s;
    }
    .header .cta-btn:hover {
        background-color: #f7b600;
        color: white;
    }

    .contributions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 40px 20px;
        gap: 20px;
    }
    .contribution-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        padding: 25px;
        flex: 1 1 300px;
        max-width: 350px;
        text-align: center;
        transition: transform 0.3s;
    }
    .contribution-card:hover {
        transform: translateY(-5px);
    }
    .contribution-card h3 {
        margin-top: 10px;
        /*color: #1a3c6f;*/
    }
    .contribution-card p {
        font-size: 0.95em;
        margin: 15px 0;
    }
    .contribution-card ul {
        text-align: left;
        padding-left: 20px;
        margin: 10px 0;
    }
    .contribution-card ul li {
        margin-bottom: 8px;
    }
    .contribution-card .cta-btn {
        background-color: #ffbf18;
        color: #523488;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 25px;
        font-weight: 500;
        display: inline-block;
        transition: 0.3s;
    }
    .contribution-card .cta-btn:hover {
        background-color: #fff;
        color: #533488;
        border: solid 1px #533488;
    }

    .recognition {
        background: linear-gradient(270deg, #573b97 0%, #3c286a 100%);
        text-align: center;
        padding: 50px 20px;
    }
    .recognition h2 {
        color: #fff;
        margin-bottom: 20px;
    }
    .recognition ul {
        list-style-type: disc;
        margin: 20px auto;
        max-width: 600px;
        text-align: left;
        padding-left: 20px;
    }
    .recognition li{
        color: #fff;
    }
     .footer p {
          color: #000;
     }
    .footer {
        text-align: center;
        padding: 40px 20px;
        background-color: #ffbf18;
        color: white;
    }
    .footer .cta-btn {
        margin-top: 15px;
            background-color: #fefdff;
    color:#523487;
        padding: 12px 25px;
        text-decoration: none;
        font-weight: 500;
        border-radius: 30px;
        display: inline-block;
        transition: 0.3s;
    }
    .footer .cta-btn:hover {
        background-color: white;
        color: #4e3180;
    }

    @media (max-width: 768px) {
        .contributions {
            flex-direction: column;
            align-items: center;
        }
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
                    <h2>Get Involved</h2>
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
        
        
        
        
<div class="header">
    <h1 style="color: #fff;">Your Contribution, Their Future</h1>
    <p>At ERA, every Rosarian and well-wisher has the power to make an impact. Whether through time, talent, or resources, your involvement strengthens our community, supports students, and keeps the Rosary legacy alive.</p>
    <a href="register.php" class="cta-btn">Join Us Today</a>
</div>

<div class="contributions">
    <div class="contribution-card">
        <h3>Donate Online</h3>
        <p>Help us fund scholarships, student aid, and alumni-driven initiatives.</p>
        <ul>
            <li>One-time donation or recurring support</li>
            <li>100% transparency with fund usage</li>
        </ul>
        <a href="donation-form.php" class="cta-btn">Donate Now</a>
    </div>

    <div class="contribution-card">
        <h3>Sponsor a Student</h3>
        <p>Adopt a child’s education by covering school fees, uniforms, books, or exam costs.</p>
        <ul>
            <li>Support bright students from underprivileged backgrounds</li>
            <li>Make education accessible and dreams possible</li>
        </ul>
        <a href="sponsorships.php" class="cta-btn">Sponsor a Student</a>
    </div>

    <div class="contribution-card">
        <h3>Give In Kind</h3>
        <p>Contribute books, sports kits, stationery, or services that directly benefit students and teachers.</p>
        <ul>
            <li>Library books, learning materials, or equipment</li>
            <li>Gifts for recognition & alumni events</li>
        </ul>
        <a href="#" class="cta-btn">Pledge Your Contribution</a>
    </div>

    <div class="contribution-card">
        <h3>Volunteer Your Time</h3>
        <p>Share your skills, time, and guidance with students and the community.</p>
        <ul>
            <li>Mentor Class 9–10 students in career choices</li>
            <li>Assist in organizing alumni reunions and events</li>
            <li>Host a workshop or panel</li>
        </ul>
        <a href="register.php" class="cta-btn">Volunteer Signup</a>
    </div>

    <div class="contribution-card">
        <h3>Sponsor an Event or Project</h3>
        <p>Help us create impactful alumni programs and memorable school events.</p>
        <ul>
            <li>Fund cultural programs, reunions, or sports tournaments</li>
            <li>Partner on community service initiatives</li>
        </ul>
        <a href="sponsorships.php" class="cta-btn">Sponsor an Event</a>
    </div>
</div>

<div class="recognition">
    <h2>Recognition & Gratitude</h2>
    <ul>
        <li>Every donor and volunteer receives acknowledgment in ERA newsletters and events.</li>
        <li>Sponsors receive digital certificates and special mentions.</li>
        <li>Transparent reporting ensures your support is used meaningfully.</li>
    </ul>
</div>

<div class="footer">
    <p>Together, we keep Rosary’s spirit alive. Once a Rosarian, Always a Rosarian.</p>
    <a href="get-involved.php" class="cta-btn">Get Involved</a>
</div>
  
@endsection