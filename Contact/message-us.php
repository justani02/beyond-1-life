<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="Images/contact-us.png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="beyond-1-life.css" />
  </head>
  <body>
    <header class="header">
        <a href="#" class="logo">beyond-1-life</a>
      <!-- <img src="images/logo.png" alt="thapa technical logo" class="logo" /> -->
      <nav class="navbar">
        <ul class="navbar-lists">
          <li><a class="navbar-link home-link" href="beyond-1-life.php" >Home</a></li>
          <li><a class="navbar-link service-link" href="services.php">Services</a></li>
          <li><a class="navbar-link faq-link" href="FAQs.php">FAQ's</a></li>
          <li><a class="navbar-link about-link" href="message-us.php">Contact Us</a></li>
          <li><a class="navbar-link about-link" href="about.php">About</a></li>
        </ul>
    </nav>

      <div class="mobile-navbar-btn">
        <ion-icon
          class="mobile-nav-icon"
          name="menu-outline"
          class="mobile-nav-icon"
        ></ion-icon>

        <ion-icon
          class="mobile-nav-icon"
          name="close-outline"
          class="mobile-nav-icon"
        ></ion-icon>
      </div>
    </header>


    <!-- ======================================== 
            Contact Us Section   
    ========================================  -->

    <section class="section section-contact section--hidden">
      <div class="container">
        <h2 class="common-heading">Contact Us</h2>
      </div>

      <div class="section-contact-main container">
        <form action="https://formspree.io/f/xnqwzoro" method="POST">
          <div class="grid grid-two-col">
            <input
              type="text"
              name="username"
              id=""
              required
              placeholder="Name"
            />
            <input
              type="email"
              name="email"
              required
              placeholder="Email"
              autocomplete="false"
            />
          </div>
          <div>
            <input type="text" name="subject" placeholder="Subject" />
          </div>
          <div>
            <textarea name="message" id="" placeholder="Message"></textarea>
          </div>

          <div>
            <input type="submit" value="send message" class="btn" />
          </div>
        </form>
      </div>
    </section>

     <!-- ======================================== 
          Our footer Section   
    ========================================  -->
     <footer class="section section-footer section--hidden">
      <div class="container grid grid-four-col">
        <div class="f-about">
          <h3>About</h3>
          <p>The main aim of creating a blood organ donation management system is to streamline the process of managing blood and organ 
            donations, ensuring efficient coordination among donors, recipients, and healthcare organizations, ultimately leading to 
            more successful donations and improved patient outcomes.
          </p>
        </div>

        <div class="f-links">
          <h3>Links</h3>
          <ul>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="beyond-1-life.php">Home</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="services.php">Services</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">FAQ's</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="message-us.php">Contact</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="about.php">About</a>
            </li>
          </ul>
        </div>

        <div class="f-services">
          <h3>FAQ's</h3>
          <ul>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">What is blood?</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">Types of Blood</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">Blood Transfusion</a>
            </li>

            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">What are organs?</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">What is meant by organ donation?</a>
            </li>
            <li>
              <span><ion-icon name="arrow-forward-outline"></ion-icon></span
              ><a href="FAQs.php">What are the types of organ donation?</a>
            </li>
          </ul>
        </div>

        <div class="f-address">
          <h3>Have a Questions?</h3>
            <div>
              <p>
                <span><ion-icon name="mail-outline"></ion-icon></span>
                sample.mail@mail.com
              </p>
            </div>
          </address>
        </div>
      </div>

      <div class="container">
        <div class="f-social-icons">
          <a href="">
            <ion-icon class="icons" name="logo-linkedin"></ion-icon>
          </a>

          <a href="">
            <ion-icon class="icons" name="logo-github"></ion-icon>
          </a>

          <a href="">
            <ion-icon class="icons" name="logo-twitter"></ion-icon>
          </a>

          <a href="#">
            <ion-icon class="icons" name="logo-instagram"></ion-icon>
          </a>

          <a href="">
            <ion-icon class="icons" name="logo-youtube"></ion-icon>
          </a>
        </div>

        <div class="f-credits">
          <p>
            Copyright ©2023 All rights reserved | This template is made by ANANYA CHANDRAKER
          </p>
        </div>
      </div>
    </footer>
  
      <!-- ======================================== 
            Our JavaScript Section   
      ========================================  -->
      <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
      ></script>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script src="beyond-life.js"></script>
    </body>
  </html>
  
