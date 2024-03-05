<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="home.css" rel="stylesheet">
    <link  href="loginReg.html">
  
</head>
<body>
<!--NAVBAR SETUP-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
  <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">DevotionDiaries</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#overview">Overview</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#faqs">FAQs</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#contact">Contact</a>
              </li>
          </ul>
          <div class="nav-button">
              <button class="btn-black-btn" id="loginBtn" onclick="login()">Sign In</button>
              <!-- <button class="btn" id="registerBtn" onclick="register()">Sign Up</button> -->
          </div>
      </div>
      
  </div>
</nav>

    
<!--START Home Section-->
<section class ="home" id="home">
  <div class="container">
    <div class="row min-vh-100 align-items-center">
      <div class="content">
        <h3>Welcome to Devotion Diaries - </h3>
        <h3>Your Daily Companion for Spiritual Growth and Reflection</h3>
        <p>Discover Tranquility in Every Entry: Commence Your Online Devotion Diary</p>
        <!-- Inside the "content" div in the home section -->
        <a class="sign-in-button" onclick="register()">Start Now</a>

      </div>
    </div>
  </div>
</section>



<!--End home Section-->

<!-- START about us -->
<section class="aboutUs" id="aboutus">
  <div class="container">
    <div class="text-center">
      <h1>Learn more about us!</h1>
      <p>Welcome to Devotion Diaries, your online sanctuary for spiritual reflection and growth. At Devotion Diaries, we believe in the power of personal devotion and the transformative impact it can have on one's life. Our platform is designed to provide a sacred space for individuals to express their thoughts, connect with their spirituality, and cultivate a deeper sense of purpose.</p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-12 col-lg-4">
        <div class="card border-0">
            <div class="card-body text-center py-5">
                <h4 class="card-title">Our Mission</h4>
                <p class="lead card-subtitle">At the heart of Devotion Diaries is a mission to inspire and empower individuals on their spiritual journey. We aim to create a supportive community where users can freely share their devotion, insights, and experiences, fostering a sense of unity and understanding among diverse spiritual practices.</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card border-0">
            <div class="card-body text-center py-5">
                <h4 class="card-title">What we are</h4>
                <p class="lead card-subtitle">Devotion Diaries was founded by a group of passionate individuals who share a common vision for creating a positive impact in the world through the exploration of devotion. Our team is composed of seasoned developers, designers, and spiritual enthusiasts, united by the belief that technology can be a powerful tool for fostering spiritual growth.</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card border-0">
            <div class="card-body text-center py-5">
                <h4 class="card-title">Goals</h4>
                <p class="lead card-subtitle">Our platform inspires spiritual growth and fosters a positive, inclusive community for daily devotion practices. We encourage consistent routines, mindful reflection, and celebrate diverse spiritual practices. Providing accessible resources and a user-friendly experience, our goal is to enable personal progress and a sense of accomplishment on individual spiritual journeys.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END aboutus -->

<!-- START overview -->
<section class="overView" id="overview">
  <div id="overview" class="overview">
    <div class="slidershow-container">
    <div class="slidershow middle">
        <div class="slides">
          <input type="radio" name="r" id="r1" checked>
          <input type="radio" name="r" id="r2">
          <input type="radio" name="r" id="r3">
          <input type="radio" name="r" id="r4">
          <input type="radio" name="r" id="r5">
          <div class="slide s1">
            <img src="/Images/dailyPrompt.png" alt="">
          </div>
          <div class="slide">
            <img src="/Images/profile.png" alt="">
          </div>
          <div class="slide">
            <img src="/Images/dailyPrompt.png" alt="">
          </div>
          <div class="slide">
            <img src="/Images/newEntry.png" alt="">
          </div>
          <div class="slide">
            <img src="/Images/view.png" alt="">
          </div>
        </div>
  
        <div class="navigationBTN">
          <label for="r1" class="bar"></label>
          <label for="r2" class="bar"></label>
          <label for="r3" class="bar"></label>
          <label for="r4" class="bar"></label>
          <label for="r5" class="bar"></label>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END overview -->

<!-- START FAQs -->
<section class="faqs" id="faqs">
  <div class="wrapper">
    <p>The Begninning of a New Asset class</p>
    <h1>Frequently Asked Questions</h1>

    <div class="faq">
      <button class="accordion">
        What is Devotion Diaries?
          <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          Devotion Diaries is an online platform that provides a sacred space for individuals to express their thoughts, reflections, and experiences related to their spiritual journey. It serves as a digital diary for fostering personal devotion and spiritual growth.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        How do I create an account on Devotion Diaries?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          Creating an account on Devotion Diaries is easy. Simply click on the "Sign Up" button, fill in the required information, and follow the prompts to set up your personal Devotion Diary.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        Is my information and diary content private?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          Yes, we prioritize the privacy and security of our users. Your information and devotion entries are kept confidential and are only visible to you, unless you choose to share them with the community.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        Is Devotion Diaries limited to a specific religious or spiritual tradition?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          Not at all. Devotion Diaries is an inclusive platform that welcomes individuals from all religious and spiritual backgrounds. Our community celebrates diversity and the richness of human spirituality.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        Are there any fees associated with using Devotion Diaries?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          Devotion Diaries is currently a free platform for users. We may introduce premium features in the future, but basic usage and access to essential features will always remain free.
        </p>
      </div>
    </div>
  </div>

</section>
<!-- END FAQs -->

<!-- START Contact -->

<section class="contact" id="contact">
  <div class="container-lg">
      <div class="text-end">
          <h2>Get in touch
              <p class="lead">Questions to ask? Fill the in form</p>
          </h2>
      </div>

      <div class="row justify-content-end my-10">
          <div class="col-lg-6">
              <form form action="https://formsubmit.co/el/derure" method="POST">
                 
                  <div class="mb-4 input-group">
                      <span class="input-group-text">
                          <i class="bi bi-envelope-fill"></i>
                      </span>
                      <!-- <input type="hidden" name="access_key" value="b7ae3e69-19b9-4b7a-ba30-b81ad0aac1a8"> -->
                      <input type="email" name="email" class="form-control" placeholder="e.g. jhondoe@example.com">
                      <!-- tooltip -->
                      <span class="input-group-text">
                          <span class="tt" data-bs-placement="bottom" title="Enter email address">
                              <i class="bi bi-question-circle text-muted"></i>
                          </span>
                      </span>
                  </div>

                  <div class="mb-4 input-group">
                      <span class="input-group-text">
                          <i class="bi bi-person-fill"></i>
                      </span>
                      <!-- <input type="hidden" name="access_key" value="b7ae3e69-19b9-4b7a-ba30-b81ad0aac1a8"> -->
                      <input type="text" name="name" class="form-control" placeholder="e.g. John Doe">
                      <!-- tooltip -->
                      <span class="input-group-text">
                          <span class="tt" data-bs-placement="bottom" title="Enter your full name">
                              <i class="bi bi-question-circle text-muted"></i>
                          </span>
                      </span>
                  </div>


                  <div class="form-floating mb-4 mt-5 ">
                      <textarea name="query" class="form-control" style="height:140px"></textarea>
                      <label for="query">Your query...</label>
                  </div>

                  <div class="mb-4 text-center">
                      <button type="submit" name="button" class="btn btn-secondary">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>

<!-- END Contact -->


<!-- Footer -->
<footer class="text-center text-white fixed-bottom-footer" style="background-color: rgba(113, 99, 186, 0.8)">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8 ">
          <p style="color: white; margin-top: 30px">
              Devotion Diaries, your dedicated guide to spiritual growth, 
              invites you on a transformative journey of reflection and tranquility. 
              Embrace the power of daily devotion with our intuitive platform, 
              where each entry becomes a stepping stone to a more enriched and mindful life. 
              Start your personalized spiritual adventure today with Devotion Diaries - 
              where every word is a step closer to inner peace and self-discovery.
          </p>
        </div>
      </div>

    <div class="text-center mb-3">
      <a href="" class="text-white me-4" style="font-size: 24px;">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="text-white me-4" style="font-size: 24px;">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="" class="text-white me-4" style="font-size: 24px;">
        <i class="bi bi-google"></i>
      </a>
      <a href="" class="text-white me-4" style="font-size: 24px;">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="text-white me-4" style="font-size: 24px;">
        <i class="bi bi-threads"></i>
      </a>
    </div>
    <!-- Section: Social -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2024 Copyright:
    <a class="text-white" href="https://DevotionDiaries.com/"
       >DevotionDiaries.com</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-iBjN/2I4BKeDkKtWXBfLSlA0Nm7O5HQ8sr2jHtb6cG2QqFCsANuE5F5+tbqJlXeB"
        crossorigin="anonymous"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    <script>
      const tooltips = document.querySelectorAll('.tt')
      tooltips.forEach(t=>{
          new bootstrap.Tooltip(t)
      })
  </script>
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        this.parentElement.classList.toggle("active");

        var pannel = this.nextElementSibling;

        if (pannel.style.display === "block") {
          pannel.style.display = "none";
        } else {
          pannel.style.display = "block";
        }
      });
    }
  </script>
</body>
</html>