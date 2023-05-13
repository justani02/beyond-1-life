<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="my portfolio website to showcase the work I have done so far, the services I provide and all my professionals life.">
    <title>beyond-1-life </title>
    <link rel="icon" type="image/x-icon" href="Images/favicon-img.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">



    <link  rel="stylesheet" href="beyond-1-life.css"/>
    <link rel="style" href="count.css">
    <!-- <link rel="stylesheet" href="dark-light-mode.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  </head>

  <body>
    <header class="header">
      <a href="#" class="logo">beyond-1-life</a>
      <!-- <img
        src="/index/Images/LOGO.png"
        alt="beyond-1-life logo"
        class="logo"
      /> -->
      <nav class="navbar">
        <ul class="navbar-lists">
          <li><a class="navbar-link home-link" href="beyond-1-life.php" >Home</a></li>
          <li><a class="navbar-link service-link" href="services.php">Services</a></li>
          <li><a class="navbar-link faq-link" href="FAQs.php">FAQ's</a></li>
          <li><a class="navbar-link about-link" href="message-us.php">Contact Us</a></li>
          <li><a class="navbar-link about-link" href="about.php">About</a></li>
          <!-- <img src="Images/moon.png" id="icon"> -->
        </ul>

        <!-- <script>
          var icon=document.getElementById("icon");

          icon.onclick=function()
          {
            document.body.classList.toggle("dark-theme");
            if (document.body.classList.contains("dark-theme")){
              icon.src="Images/sun.png";
            }
            else{
              icon.src="Images/moon.png";
            }
          }
        </script> -->


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
          Our Main Hero Section Start  
    ========================================  -->
    <main>
      <section class="section-hero section">
        <div class="container grid grid-two-col">
          <div class="section-hero-data">
            <p class="hero-top-data">Project</p>
            <h1 class="hero-heading">Blood-Organ Donation Management System</h1>
            <p class="hero-para">
              Welcome to the world of blood and organ donation management! The act of donating
              blood and organs is a selfless and life-saving gesture that has the power to change the lives
              of many people. However, managing the process of blood and organ donation can be a 
              complex and challenging task. That's where the blood organ donation management system
              comes in. Our system is designed to streamline and simplify the process of organizing and 
              managing blood and organ donations. With features such as donor and recipient databases,
              communication tools, and logistics management, our system makes it easier than ever to
              facilitate successful donations and improve patient outcomes. Join us on this journey to 
              make a positive impact on the world through the power of blood and organ donation.
            </p>
            <div>
              <a href="sign-in-up-form.php" class="btn register-btn">REGISTER</a>
            </div>
          </div>

          <div class="img-hover-zoom img-hover-zoom--slowmo">
            <img src="Images/medical-box-donate1.png" alt="donate image"/>
          </div>
        </div>
      </section>
    </main>

    <!-- ======================================== 
          counter section Start  
    ========================================  -->
     <!--no. count grid START-->
     <div class="container">
      <h2 class="common-heading">Section Counter</h2>
    </div>

 <div class="section-counter">
  <div class="section-counter__section">
      <img src="blood-bag.gif" id=blood-bag alt="Blood Donation">
      <span class="section-counter__number" data-val="5050">000+</span>
      <span class="section-counter__text">BLOOD DONATED</span>
  </div>
  <div class="section-counter__section">
      <img src="heart.gif" id="heart" alt="Organ Donation">
      <span class="section-counter__number" data-val="12,000">000+</span>
      <span class="section-counter__text">ORGAN DONATED</span>
  </div>
  <div class="section-counter__section">
      <img src="waiting-list.gif" id=waiting-list alt="Blood Bag">
      <span class="section-counter__number" data-val="1,00,000">000+</span>
      <span class="section-counter__text">WAITING LIST</span>
  </div>
</div>
<!--section counter script-->

<script src="count.js"></script>

    <!-- ======================================== 
          FAQ's Start  
    ========================================  -->
    <section class="section-services section ">
      <div class="container">
        <h2 class="common-heading">FAQ's</h2>
      </div>

      <div class="container grid grid-three-col">
        

        <div class="service-box">
          <img src="Images/blood-drop-removebg-preview.png" class="service-icon">
          <h3>What is blood?</h3>
          <p>
            Your blood is made up of liquid and solids. The liquid part, called plasma, is made of water, salts, and protein. Over half of your blood is plasma.
            The solid part of your blood contains red blood cells, white blood cells, and platelets. Red blood cells (RBC) deliver oxygen from your lungs to your tissues and organs.
          </p>
        </div>

        <div class="service-box">
          <img src="Images/blood-drop-removebg-preview.png" class="service-icon">
          <h3>Types of Blood</h3>
          <p>The 4 different blood groups in the ABO system are A, B, AB and O. A person's blood group is determined by a pair of genes-one gene inherited from each parent.
            Each blood group is identified by its own set of molecules (called antigens), which are located on the surface of red blood cells.</p>
        </div>


        <div class="service-box">
          <img src="Images/blood-drop-removebg-preview.png" class="service-icon">
          <h3>Blood Transfusion</h3>
          <p class="mb-0">Blood transfusion is needed for:<br>
              1. Women with complications of pregnancy, such as ectopic pregnancies and
              haemorrhage before, during or after childbirth.<br>
              2.Children with severe anaemia often resulting from malaria or malnutrition.<br>
              3.People with severe trauma following man-made and natural disasters.<br>
              4.Many complex medical and surgical procedures and cancer patients.<br>
            </p>
        </div>

        <div class="service-box">
          <img src="Images/002-liver.png" class="service-icon">
          <h3>What are organs?</h3>
          <p>
            In biology, an organ (from the Latin "organum" meaning an instrument or tool) is a collection of tissues that structurally 
            form a functional unit specialized to perform a particular function. Your heart, kidneys, and lungs are examples of organs
          </p>
        </div>
        <div class="service-box">
          <img src="Images/002-liver.png" class="service-icon">
          <h3>What is meant by organ donation?</h3>
          <p>Organ donation is when you decide to give an organ to save or transform the life of someone else. You can donate some organs while you are alive,
            and this is called living organ donation.
            However, most organ and tissue donations come from people who have died.
          </p>
        </div>

        <div class="service-box">
          <img src="Images/002-liver.png" class="service-icon">
          <h3>What are the types of organ donation?</h3>
          <p>
            By registering to become an organ donor you have the option to donate organs such as your heart, lungs, liver, kidneys, pancreas and small bowel.
            All of these forms of donation can greatly enhance or even save the life of someone in need.
        </p>
        </div>
      </div>
    </section>

   
    <!-- ======================================== 
          Our Testimonial Section Start  
    ========================================  -->

    <!-- Happy Blood Donors -->

    <section class="section section-testimonial ">
        <div class="container">
          <h2 class="common-heading">Happy Blood Donors</h2>
        </div>
          <!-- Slider main container -->

          <!-- Swiper -->
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I feel proud to donate blood and know that my contribution can save lives.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img loading="lazy" src="Images/sarah.jpeg">
            </figure>
            <div class="client-data-details">
              <p>SARAH</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>Donating blood is a simple act of kindness that has a big impact on someone's life. 
              It's a privilege to give back in such a meaningful way.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img loading="lazy" src="Images/michael.jpeg">
            </figure>
            <div class="client-data-details">
              <p>MICHAEL</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I donate blood regularly because I know it's a vital resource for patients in need. 
              It's a small effort that can make a huge difference.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img loading="lazy" src="Images/jessica.jpeg">
            </figure>
            <div class="client-data-details">
              <p>JESSICA</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I donated blood for the first time and it was a rewarding experience. 
              Knowing that my blood can help someone in their time of need is incredibly fulfilling.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img loading="lazy" src="Images/helen.jpeg">
            </figure>
            <div class="client-data-details">
              <p>HELEN</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I donate blood because I want to make a positive impact on the lives of others. 
              It's a selfless act that can truly save lives.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img src="Images/emily.jpeg">
            </figure>
            <div class="client-data-details">
              <p>EMILY</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I donate blood as a way to give back to my community and help those who are facing health challenges. 
              It's a small sacrifice that can make a big difference.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img src="Images/jenny.jpeg">
            </figure>
            <div class="client-data-details">
              <p>JENNY</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I've been donating blood for years, and it's a meaningful way for me to contribute to the health and well-being of others. 
              It's a privilege to be able to help in this way.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img src="Images/maria.jpeg" alt="">
            </figure>
            <div class="client-data-details">
              <p>MARIA</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
         <div class="swiper-slide">
        
          <div class="swiper-client-msg">
            <p>I  donate blood because I believe it's our responsibility to help those in need. 
              It's a simple act that has the potential to save lives and bring hope to patients and their families.</p>
          </div>
          <div class="swiper-client-data grid grid-two-col ">
            <figure>
            <img src="Images/john.jpeg">
            </figure>
            <div class="client-data-details">
              <p>JOHN</p>
            </div>
          </div>
        </div>
        <!-- slide end  -->
       
      </div>
      <div class="swiper-pagination"></div>
    </div>
        </div>
    </section>



    <!-- Happy Organ Donors -->
    <section class="section section-testimonial ">
      <div class="container">
        <h2 class="common-heading">Happy Organ Donors</h2>
      </div>
        <!-- Slider main container -->

        <!-- Swiper -->
  <div class="swiper mySwiper container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>Organ donation has allowed me to give the gift of life to someone in need, 
            and it's a decision I am proud of.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img loading="lazy" src="Images/vaishnavi.jpeg">
          </figure>
          <div class="client-data-details">
            <p>VAISHNAVI</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>Being an organ donor means that even after I'm gone, 
            I can continue to make a positive impact by potentially saving or improving 
            the lives of others.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img loading="lazy" src="Images/ansh.jpeg">
          </figure>
          <div class="client-data-details">
            <p>ANSH</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>I registered as an organ donor because I believe it's a selfless act that can have 
            a profound impact on someone's life. It's a legacy I hope to leave behind.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img loading="lazy" src="Images/chris.jpeg">
          </figure>
          <div class="client-data-details">
            <p>CHRIS</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>Seeing my loved one receive a life-saving organ transplant reinforced my decision to be an organ donor. 
            It's a way to give hope to those who are waiting for a second chance.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img loading="lazy" src="Images/maanik.jpeg">
          </figure>
          <div class="client-data-details">
            <p>MAANIK</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>I am an organ donor because I want to make a difference in the lives 
            of others, even beyond my own lifetime. It's a powerful way to help those in need.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img src="Images/pooja.jpeg">
          </figure>
          <div class="client-data-details">
            <p>POOJA</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>I am proud to be an organ donor because it's a way to give the greatest gift - the gift of life. It's a decision I made with my heart.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img src="Images/samantha.jpeg">
          </figure>
          <div class="client-data-details">
            <p>SAMANTHA</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>Being an organ donor is a personal choice that I made to make a positive impact in the world. It's a decision that aligns with my values and desire to help others.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img src="Images/mark.jpeg" alt="">
          </figure>
          <div class="client-data-details">
            <p>MARK</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
       <div class="swiper-slide">
      
        <div class="swiper-client-msg">
          <p>Organ donation is a meaningful way for me to continue making a difference even after I'm no longer here. It's a decision that brings me peace and purpose.</p>
        </div>
        <div class="swiper-client-data grid grid-two-col ">
          <figure>
          <img src="Images/unnati.jpeg">
          </figure>
          <div class="client-data-details">
            <p>UNNATI</p>
          </div>
        </div>
      </div>
      <!-- slide end  -->
     
    </div>
    <div class="swiper-pagination"></div>
  </div>
      </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="beyond-life.js"></script>
    
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
    
  </body>
</html>
