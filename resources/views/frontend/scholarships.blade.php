@extends('layouts.app')

@section('content')

  <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
<style>
   .page-header{
        margin-top:0px;
    }
    .containers {
      width: 90%;
      max-width: 1100px;
      margin: 20px auto;
      display: flex;
      gap: 20px;
    }
    .main {
      flex: 2;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
    }
    .sidebar {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .about-three {
            padding: 30px 0 50px !important;
    }
    .card {
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .banner {
      background: #eaf1fa;
      padding: 40px;
      text-align: center;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .banner h1 {
      margin: 0;
      font-size: 28px;
      color: #222;
    }
    .stats {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 15px 0;
      font-size: 14px;
      color: #444;
    }
    .progress {
      background: #e9ecef;
      border-radius: 20px;
      overflow: hidden;
      height: 10px;
      margin: 10px 0;
    }
    .progress-bar {
      background: #28a745;
      height: 100%;
      width: 1%;
    }
    .donate-btn {
      display: inline-block;
      background: #c82333;
      color: #fff;
      padding: 12px 24px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      margin-top: 10px;
    }
    .donor {
      border-bottom: 1px solid #eee;
      padding: 8px 0;
    }
    .donor:last-child {
      border-bottom: none;
    }
    .share {
      text-align: center;
      font-size: 14px;
    }
    .share a {
      color: #c82333;
      text-decoration: none;
      font-weight: bold;
    }
       /* Gift Button */
    .gift-btn {
      background: #c8102e;
      color: #fff;
      border: none;
      padding: 12px 24px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: #fff;
      width: 350px;
      border-radius: 12px;
      padding: 20px;
      position: relative;
      animation: fadeIn 0.3s ease;
    }

    .modal-header {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
      text-align: left;
    }

    .secure-text {
      font-size: 12px;
      color: #777;
      margin-bottom: 15px;
      text-align: left;
    }

    .amount-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-bottom: 15px;
    }

    .amount-btn {
      background: #f3f3f3;
      border: 1px solid #ddd;
      padding: 12px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.2s;
    }

    .amount-btn:hover,
    .amount-btn.active {
      background: #c8102e;
      color: #fff;
      border-color: #c8102e;
    }

    .input-amount {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .proceed-btn {
      background: #c8102e;
      color: #fff;
      border: none;
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
    }
     .accordion {
      max-width: 800px;
      margin: auto;
    }
    details {
      margin-bottom: 10px;
      background: #fff;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 15px;
    }
    summary {
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      outline: none;
    }
    summary::-webkit-details-marker {
      display: none;
    }
    summary:after {
      content: "+";
      float: right;
      font-size: 20px;
      transition: transform 0.3s;
    }
    details[open] summary:after {
      content: "−";
    }
    p, li {
      font-size: 15px;
      color: #333;
      line-height: 1.5;
    }
    ul {
      margin: 10px 0 0 20px;
    }

    /* Close Button */
    .close {
      position: absolute;
      top: 12px;
      right: 15px;
      font-size: 20px;
      color: #666;
      cursor: pointer;
    }

    @keyframes fadeIn {
      from { transform: scale(0.8); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
    @media(max-width:768px) {
      .container {
        flex-direction: column;
      }
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
                    <h2>Scholarships</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>Scholarships</li>
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
                  
                  
                  
  <div class="containers">
    <!-- Main Content -->
    <div class="main">
      <div class="banner">
        <h1>Scholarships</h1>
      </div>

      <div class="stats">
        <span>2 gifts</span>
        <span>₹600 raised</span>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width:1%;"></div>
      </div>
      <p><strong>1%</strong> Reached of ₹5,000,000 goal</p>

      <a href="#" class="donate-btn" id="openModal">Make a gift</a>

      <div class="card" style="margin-top:20px;">
        <p>
        We are dedicated to ensuring that each students’ education is made affordable by providing financial assistance - both need based and merit based. Over the last 10 years and more, numerous Alumni as well as teachers have provided financial aid, rewards and scholarships for disadvantaged students and also those who have demonstrated academic ability. We have several on-going scholarships presented to students on the school annual day function each year. 

        </p>
        <p>
         Write to the Office of Scholarships and donations to know more : email address
All donations big and small can make a difference. It is more than just financial aid. It relieves the strain on a child, providing a healthy state of mind to learn and grasp. It boosts learning and development.

        </p>
        <p>
          Write to: <a href="mailto:era.rhs@gmail.com">era.rhs@gmail.com</a>
        </p>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="card">
        <h3>2 Gifts</h3>
        <div class="donor">Neel Dharmendra Mehta - ₹500.00</div>
        <div class="donor">Vidhya Sharma - ₹100.00</div>
      </div>
     
    </div>
  </div>

                </div>
            </div>
        </section>
        
        
        
        
         <!-- Modal -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sponsorship Form</title>
  <style>


    .gift-btn {
      background: #c8102e;
      color: #fff;
      padding: 12px 24px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    .modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal-content {
      background: #fff;
      width: 580px;
      max-height: 90vh;
      overflow-y: auto;
      border-radius: 12px;
      padding: 20px;
      position: relative;
      animation: fadeIn 0.3s ease;
    }

    .close {
      position: absolute;
      top: 12px;
      right: 15px;
      font-size: 20px;
      color: #666;
      cursor: pointer;
    }

    /*h2 {*/
    /*  font-size: 18px;*/
    /*  margin-bottom: 8px;*/
    /*}*/
    /*p {*/
    /*  font-size: 13px;*/
    /*  color: #666;*/
    /*  margin-bottom: 12px;*/
    /*}*/

    /* Step 1 */
    .amount-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-bottom: 15px;
    }
    .amount-btn {
      background: #f3f3f3;
      border: 1px solid #ddd;
      padding: 12px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
    }
    .amount-btn.active, .amount-btn:hover {
      background: #c8102e;
      color: #fff;
      border-color: #c8102e;
    }
    .input-amount {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-bottom: 15px;
    }
    .proceed-btn, .submit-btn {
      background: #c8102e;
      color: #fff;
      border: none;
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 10px;
    }

    /* Step 2 */
    .form-step {
      display: none;
      text-align: left;
    }
    label {
      font-size: 13px;
      font-weight: bold;
      margin-top: 10px;
      display: block;
    }
    input, textarea, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="modal" id="giftModal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>

      <!-- Step 1: Amount -->
      <div id="step1">
        <h2>ONE TIME GIFT</h2>
        <p>🔒 Secure Payment Channel</p>
        <p>How much would you like to give?</p>

        <div class="amount-options">
          <button class="amount-btn">₹10</button>
          <button class="amount-btn">₹25</button>
          <button class="amount-btn">₹50</button>
          <button class="amount-btn">₹100</button>
          <button class="amount-btn">₹250</button>
          <button class="amount-btn">₹1000</button>
        </div>

        <p>Or enter the amount</p>
        <input type="number" class="input-amount" placeholder="₹ Enter amount">

        <button class="proceed-btn">Proceed</button>
      </div>

      <!-- Step 2: Form -->
      <div id="step2" class="form-step">
        <h2>Tell us a little about yourself</h2>
        <p>Your details help us recognize you as a donor.</p>

        <label>Sponsor Name</label>
        <input type="text" placeholder="Sponsor name (if multiple)">
        
        <label>Sponsor Name 1</label>
        <input type="text" placeholder="Sponsor name 1">

        <label>Sponsor Name 2</label>
        <input type="text" placeholder="Sponsor name 2">

        <label>Email Address</label>
        <input type="email" placeholder="Enter email">

        <label>Contact No.</label>
        <input type="tel" placeholder="Enter phone number">

        <label>Date</label>
        <input type="date">

        <label>Sponsorship</label>
        <input type="text" placeholder="Enter sponsorship type">

        <label>No. of Participants</label>
        <input type="number" placeholder="Enter number">

        <label>Photos & Videos</label>
        <select>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>

        <label>Cost</label>
        <input type="number" placeholder="Enter cost">

        <button class="submit-btn">Submit</button>
      </div>
    </div>
  </div>

  <script>
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const modal = document.getElementById("giftModal");
    const proceedBtn = document.querySelector(".proceed-btn");
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const amountBtns = document.querySelectorAll(".amount-btn");

    openModal.onclick = () => modal.style.display = "flex";
    closeModal.onclick = () => {
      modal.style.display = "none";
      step1.style.display = "block";
      step2.style.display = "none";
    };
    window.onclick = (e) => { if(e.target == modal) modal.style.display = "none"; }

    // Switch to Step 2
    proceedBtn.onclick = () => {
      step1.style.display = "none";
      step2.style.display = "block";
    }

    // Active amount selection
    amountBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        amountBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
      });
    });
  </script>


  <section class="why-choose-three">
            <div class="why-choose-three__shape-1 img-bounce"></div>
            <div class="container">
                <div class="row">
                        <div class="section-title text-center sec-title-animation animation-style1">
                  
                   <h2 class="section-title__title title-animation">ACTIVITIES & CONTRIBUTIONS<img src="assets/images/shapes/section-title-shape-1.png" alt=""></span></h2>
                   </div>
                   
                   
  <div class="accordion">

    <details>
      <summary>ALUMNI 2015 Contributions</summary>
      <ul>
        <li>Merlyn Fernandes - box of sweets to retired teachers</li>
        <li>Nadeem Mulla - sponsored DJ & music</li>
        <li>Shweta Daherkar (Das) - arranged & sponsored a cake for Alumni attendees</li>
      </ul>
    </details>

    <details>
      <summary>Announced in ALUMNI meet 2016</summary>
      <ul>
        <li>1996 batch donated Rs 25,000/- & sponsored fees for needy</li>
        <li>Ankur Palan (2001) & Vipul Hingu (2002) - trophies & mikes for sports meet</li>
        <li>ERA fund - sponsored a Water cooler for school</li>
        <li>Komal Dedhia - Rs. 10,000/- (5 medical scholarships)</li>
        <li>Komal Dedhia - Rs. 10,000/- for needy students</li>
        <li>Komal Dedhia - remedial teachers for weaker students (Math/English)</li>
        <li>Naved Bhombal (1993) - Rs. 1000/- sports scholarship</li>
        <li>Veenita Kamble (2002) - Rs. 1000/- scholarship for creatively skilled students</li>
      </ul>
    </details>

    <details>
      <summary>Announced in ALUMNI meet 2018</summary>
      <ul>
        <li>1996 batch - Rs 15,000/- for needy children</li>
        <li>Alok Gupta (2000) - Rs. 2500/- for needy students</li>
        <li>Arun Maru (1992) - Videography & streaming of Alumni 2018</li>
        <li>ERA-fund - Rs 2100/- scholarship to SSC topper</li>
        <li>ERA-fund - Rs 10000/- towards school Souvenir</li>
        <li>Fahad Thakur (1996) - Rs. 27,000/- for needy students</li>
        <li>Fahad Thakur (1996) & Asif Thakur (1993) - Rs. 20,000/- SSC topper scholarship</li>
        <li>Moazzam Dadan (1989) - fees for needy children</li>
        <li>Naved Bhombal (1993) - multiple Rs. 1000/- scholarships</li>
        <li>Rafat Khan (1980) - Rs. 20,000 for needy children</li>
        <li>Rashmi Prasad (2004) - education fees for 1 girl (3 years)</li>
        <li>Rupali Gautam (1996) - workshop (Leadership & Learning)</li>
        <li>Veenita Kamble (2002) - Rs. 1000/- scholarship for creatively skilled students</li>
      </ul>
    </details>

    <details>
      <summary>Announced in ALUMNI meet 2023</summary>
      <ul>
        <li>Affan Ansari (2015) - Eye checkup camp</li>
        <li>Alok Gupta (2000) - Rs. 1000/- scholarships for SSC toppers in Marathi & Hindi</li>
        <li>Anas Khan - food concession for Alumni meet</li>
        <li>Arun Maru (1992) - Videography & streaming of Alumni 2023</li>
        <li>Asif Thakur (1993) - Rs. 20,000 for needy + Rs. 5,000 SSC topper scholarship</li>
        <li>Captain Ritesh Bhamaria (1991) - Rs. 1 lakh for needy students + session with Std X</li>
        <li>ERA-fund - Rs. 2100/- SSC topper scholarship</li>
        <li>ERA-fund - Rs. 25,000/- for blood cancer treatment</li>
        <li>Nadeem Mulla (1992) - Rs. 25,000 for needy students</li>
        <li>Nadeem Vasta, Rashmi Prasad & friends (2004) - fees for needy student</li>
        <li>Rashmi Prasad (2004) - sponsored “Life skills workshop”</li>
        <li>Shivam Sharma (2014) - hosted Alumni meet 2023</li>
        <li>Veenita Kamble (2002) - Rs. 1000/- scholarships for creatively skilled students</li>
      </ul>
    </details>

    <details>
      <summary>To be Announced in ALUMNI meet 2025</summary>
      <ul>
        <li>Alok Gupta (2000) - Rs. 1000/- scholarships for SSC toppers in Marathi & Hindi</li>
        <li>Asif Thakur (1993) & others - donated fees for needy children</li>
        <li>Asif Thakur (1993) - Rs. 5,000 SSC topper scholarship</li>
        <li>ERA - Dental Camp with retired teacher Ms. Tanveer (2024)</li>
        <li>ERA-fund - Rs. 2100/- SSC topper scholarship</li>
        <li>Veenita Kamble (2002) - Rs. 1000/- scholarships for creatively skilled students</li>
      </ul>
    </details>

    <details>
      <summary>Other Miscellaneous Contributions</summary>
      <ul>
        <li>Minu Jain (1996) - fees for needy children</li>
        <li>Patrick Francis (1991) - fees for needy children</li>
        <li>Vincent Monteiro (1984) - Alumni advertisement</li>
        <li>Retired teacher Rosy Pinto & Bernadine Fernandes - medical expenses for ex-student</li>
        <li>Rosy Pinto, Asif Thakur & others - fees for ex-student’s daughter</li>
        <li>+ Contributions by anonymous donors</li>
      </ul>
    </details>

  </div>
                   
                   </div>
                   </div>
                   </section>
                   



  <script>
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const modal = document.getElementById("giftModal");
    const amountBtns = document.querySelectorAll(".amount-btn");

    openModal.onclick = () => modal.style.display = "flex";
    closeModal.onclick = () => modal.style.display = "none";
    window.onclick = (e) => { if(e.target == modal) modal.style.display = "none"; }

    amountBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        amountBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
      });
    });
  </script>
        
        <!--About Three End-->


@endsection