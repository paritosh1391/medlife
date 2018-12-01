
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Divine Cosmetic Surgery – Best Plastic Surgeon in Delhi, Gurgaon</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="favicon.ico" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper.min.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <!-- Styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php 
  if($_POST["submit"]) {
    $recipient="xyz@gmail.com, digvijay6666@gmail.com, gargdee@gmail.com, consultant@divinecosmeticsurgery.com, amit@divinecosmeticsurgery.com, deepti@divinecosmeticsurgery.com, info@divinecosmeticsurgery.com";
    $subject="Appointment";
    $sender=@$_POST["sender"];
    $senderEmail=@$_POST["senderEmail"];
    $senderNumber=@$_POST["senderNumber"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$senderNumber";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    //$thankYou="<div class='success-msg'><p><img src='images/fitness.png' alt=''>Thank you! Your message has been sent.</p></div>";
    header('Location: thank-you.php');die;
  }
  ?>

  <div class="success-msg-wrap">
    <?php echo $thankYou;?>     
  </div>


  <header class="site-header">
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
            <div class="site-branding d-flex align-items-center">
              <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo-1.png" alt="logo"></a>
            </div><!-- .site-branding -->
            
            <nav class="site-navigation d-flex justify-content-end align-items-center">
              <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center main-menu">
                <li class="current-menu-item"><a href="index.html">Home</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#procedures">Procedures</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="call-btn button gradient-bg mt-3 mt-md-0">
                  <a class="d-flex justify-content-center align-items-center" href="tel:9811994417">
                    <img src="images/emergency-call.png"> +91 9811994417
                  </a>
                </li>
              </ul>
            </nav><!-- .site-navigation -->
            
            <div class="hamburger-menu d-lg-none">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div><!-- .hamburger-menu -->
          </div><!-- .col -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .nav-bar -->
    
    <div class="swiper-container hero-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero-2.png')">
          <div class="hero-content-overlay position-absolute w-100 h-100">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                  <header class="entry-header">
                    <h1>We Guarantee you the best <br>change in you</h1>
                  </header><!-- .entry-header -->
                  
                  <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                    <button type="button" class="btn btn-primary button gradient-bg" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer><!-- .entry-footer -->
                </div><!-- .col -->
              </div><!-- .row -->
            </div><!-- .container -->
          </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
        
        <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero-3.png')">
          <div class="hero-content-overlay position-absolute w-100 h-100">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                  <header class="entry-header">
                    <h1>Get a Second life with <br>all new safe Technology</h1>
                  </header><!-- .entry-header -->
                  
                  <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                    <button type="button" class="btn btn-primary button gradient-bg" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer><!-- .entry-footer -->
                </div><!-- .col -->
              </div><!-- .row -->
            </div><!-- .container -->
          </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
        
        <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero-1.png')">
          <div class="hero-content-overlay position-absolute w-100 h-100">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                  <header class="entry-header">
                    <h1>The Best Painless Surgery Undertaken</h1>
                  </header><!-- .entry-header -->
                  
                  <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                    <button type="button" class="btn btn-primary button gradient-bg" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer><!-- .entry-footer -->
                </div><!-- .col -->
              </div><!-- .row -->
            </div><!-- .container -->
          </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
      </div><!-- .swiper-wrapper -->
      
      <div class="pagination-wrap position-absolute w-100">
        <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
      </div><!-- .pagination-wrap -->
    </div><!-- .hero-slider -->
  </header><!-- .site-header -->
  
  <div class="homepage-boxes">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="opening-hours">
            <h2 class="d-flex align-items-center">Opening Hours</h2>
            
            <ul class="p-0 m-0">
              <li>Monday - Thursday <span>8.00 - 19.00</span></li>
              <li>Friday <span>8.00 - 18.30</span></li>
              <li>Saturday <span>9.30 - 17.00</span></li>
              <li>Sunday <span>9.30 - 15.00</span></li>
            </ul>
          </div>
        </div>
        
        <!-- <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
          <div class="emergency-box">
            <h2 class="d-flex align-items-center">Emergency</h2>
            
            <div class="call-btn button gradient-bg">
              <a class="d-flex justify-content-center align-items-center" href="tel:9811994417"><img src="images/emergency-call.png">  +91 9811994417</a>
            </div>
            
            <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>
          </div>
        </div> -->
        
        <div class="col-12 col-md-6">
          <div class="appointment-box">
            <h2 class="d-flex align-items-center">Make an Appointment</h2>
            <?php 
            if($_POST["submit"]) {
              $recipient="xyz@gmail.com, digvijay6666@gmail.com, gargdee@gmail.com, consultant@divinecosmeticsurgery.com, amit@divinecosmeticsurgery.com, deepti@divinecosmeticsurgery.com, info@divinecosmeticsurgery.com";
              $senderSubject=@$_POST["senderSubject"];
              $sender=@$_POST["sender"];
              $senderEmail=@$_POST["senderEmail"];
              $senderNum=@$_POST["senderNum"];
              $mailBody="Name: $sender\nEmail: $senderEmail\nNumber: $senderNum\n\n";
              mail($recipient, $mailBody, "From: $sender <$senderEmail>");
              $thankYou="<p>Thank you! Your message has been sent.</p>";
            }
            ?>
            <form class="d-flex flex-wrap justify-content-between" method="POST">
              <div class="form-group">
                <input type="text" id="fname" name="sender" class="form-control" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="text" id="num" name="senderNum" class="form-control" placeholder="Phone No" required>
              </div>
              <div class="form-group">
                <input type="text" id="email" name="senderEmail" class="form-control" placeholder="Email" required>
              </div>
              
              <input class="button gradient-bg" type="submit" value="Book Appoitnment">
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  
  <section class="about_myself pad_bottom" id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pr-0">
          <div class="about_img">
            <img class="img-fluid" src="images/amit-gupta.png" alt="">
          </div>
        </div>
        
        <div class="col-lg-6 pl-0">
          <div class="about_box">
            <div class="section-title-wrap text-left">
              <h1>About Myself</h1>
              <p>
                Dr. Amit Gupta is one of the recognised and established cosmetic and Aesthetic Surgeon in the South East Asia region. With his comprehensive knowledge of the human body, he has been working as a Cosmetic and Hair Transplant expert from the last 9 years….
              </p>
            </div>
            
            <div class="activity">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="activity_box">
                    <div>
                      <i class="lnr lnr-database"></i>
                    </div>
                    <h3>$<span class="counter">2.5</span> M</h3>
                    <p>Total Donation</p>
                  </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                  <div class="activity_box">
                    <div>
                      <i class="lnr lnr-book"></i>
                    </div>
                    <h3 class="counter">1465</h3>
                    <p>Total Project</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="activity_box">
                    <div>
                      <i class="lnr lnr-users"></i>
                    </div>
                    <h3 class="counter">3965</h3>
                    <p>Total Volunteers</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="activity_box">
                    <div>
                      <i class="lnr lnr-users"></i>
                    </div>
                    <h3 class="counter">3965</h3>
                    <p>Total Volunteers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="our-departments" id="procedures">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="our-departments-wrap">
            <h2>Popular Procedures</h2>
            
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="our-departments-cont">
                  <header class="entry-header d-flex flex-wrap align-items-center">
                    <img src="images/popular-procedures-1.png" alt="">
                    
                    <h3>Rhinoplasty Surgery</h3>
                  </header>
                  
                  <div class="entry-content">
                    <p>Rhinoplasty can reshape the nasal shape in a natural and attractive manner. This requires a thorough understanding of nasal aesthetics as well as extensive experience performing Nasal Procedure.</p>
                  </div>
                  
                  <footer class="entry-footer">
                    <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer>
                </div>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                <div class="our-departments-cont">
                  <header class="entry-header d-flex flex-wrap align-items-center">
                    <img src="images/botox.png" alt="">
                    
                    <h3>Fat Injections</h3>
                  </header>
                  
                  <div class="entry-content">
                    <p>With significant weight loss, increasing age and the effects of gravity the buttock sags as loose skin and excess fatty tissue alter the taught, youthful appearance so often desired.</p>
                  </div>
                  
                  <footer class="entry-footer">
                    <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer>
                </div>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                <div class="our-departments-cont">
                  <header class="entry-header d-flex flex-wrap align-items-center">
                    <img src="images/popular-procedures-3.png" alt="">
                    
                    <h3>Mommy Makeover</h3>
                  </header>
                  
                  <div class="entry-content">
                    <p>‘Mommy makeover’ is an interesting term given to a set of procedures which aim to make a mother regain her vibrant teenage self.</p>
                  </div>
                  
                  <footer class="entry-footer">
                    <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer>
                </div>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                <div class="our-departments-cont">
                  <header class="entry-header d-flex flex-wrap align-items-center">
                    <img src="images/popular-procedures-4.png" alt="">
                    
                    <h3>Eyelid Procedure</h3>
                  </header>
                  
                  <div class="entry-content">
                    <p>A beautiful pair of eyes highlight the face the most. one of the first evidence of ageing is the ageing of eyes, both upper and lower.</p>
                  </div>
                  
                  <footer class="entry-footer">
                    <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer>
                </div>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                <div class="our-departments-cont">
                  <header class="entry-header d-flex flex-wrap align-items-center">
                    <img src="images/popular-procedures-5.png" alt="">
                    
                    <h3>Face - Lift</h3>
                  </header>
                  
                  <div class="entry-content">
                    <p>Facelift Procedure can help you turn back the clock, giving you a natural look that is both youthful and stunningly beautiful.</p>
                  </div>
                  
                  <footer class="entry-footer">
                    <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer>
                </div>
              </div>
              
              <div class="col-12 col-md-6 col-lg-4">
                <div class="our-departments-cont">
                  <header class="entry-header d-flex flex-wrap align-items-center">
                    <img src="images/popular-procedures-6.png" alt="">
                    
                    <h3>Double Chin Removal</h3>
                  </header>
                  
                  <div class="entry-content">
                    <p>Accumulation of fat in the neck gives the appearance of older age and obesity. People today want chiseled looks with sharp jawline and chiseled necks.</p>
                  </div>
                  
                  <footer class="entry-footer">
                    <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModal">
                      Book Appoitnment
                    </button>
                  </footer>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="testimonial-section" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Pacient’s Testimonials</h2>
        </div>
      </div>
    </div>
    
    <!-- Swiper -->
    <div class="testimonial-slider">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-9">
            <div class="testimonial-bg-shape">
              <div class="swiper-container testimonial-slider-wrap">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="entry-content">
                      <p>Initially, I had questions whether implants would be the best choice for me. Having discussed and subsequently undergone breast augmentation by Dr. Amit Gupta, I now realize that it was the best decision I could possibly make!</p>
                    </div><!-- .entry-content -->
                    
                    <div class="entry-footer">
                      <figure class="user-avatar">
                        <img src="images/user-1.jpg" alt="">
                      </figure><!-- .user-avatar -->
                      
                      <h3 class="testimonial-user">Neha</h3>
                    </div><!-- .entry-footer -->
                  </div><!-- .swiper-slide -->
                  
                  <div class="swiper-slide">
                    <div class="entry-content">
                      <p>As a young adult, going out with my friends and socializing started to become a bane of my existence as I had developed significant male breasts. Dr. Amit Gupta has managed to rid me of all those problems in an almost instantaneous fashion and cannot thank him enough for that.</p>
                    </div><!-- .entry-content -->
                    
                    <div class="entry-footer">
                      <figure class="user-avatar">
                        <img src="images/user-2.jpg" alt="">
                      </figure><!-- .user-avatar -->
                      
                      <h3 class="testimonial-user">Harsh</h3>
                    </div><!-- .entry-footer -->
                  </div><!-- .swiper-slide -->
                  
                  <div class="swiper-slide">
                    <div class="entry-content">
                      <p>When I met Dr. Amit Gupta, not only had I lost a lot of my hair but a good part of my confidence too. Thanks to his care and empathetic approach, I am back to my confident, radiant self.</p>
                    </div><!-- .entry-content -->
                    
                    <div class="entry-footer">
                      <figure class="user-avatar">
                        <img src="images/user-3.jpg" alt="">
                      </figure><!-- .user-avatar -->
                      
                      <h3 class="testimonial-user">Akash </h3>
                    </div><!-- .entry-footer -->
                  </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->
                
                <div class="swiper-pagination-wrap">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
                      </div><!-- .col -->
                    </div><!-- .row -->
                  </div><!-- .container -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .testimonial-slider -->
  </section><!-- .testimonial-section -->
  
  
  <!-- <section class="section custom-tabs">
    <div class="container">
      <div class="row">

        <div class="col-md-4 border-right element-animate">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-tab="v-pills-home" href="javascript:void(0)"><span>01</span> Amenities</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-tab="v-pills-profile" href="javascript:void(0)"><span>02</span> Medical Services</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-tab="v-pills-messages" href="javascript:void(0)"><span>03</span> Patient Services</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" data-tab="v-pills-settings" href="javascript:void(0)"><span>04</span> Expert Doctors</a>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 element-animate">

          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <span class="icon flaticon-hospital"></span>
              <h2 class="text-primary">Amenities</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
              <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <span class="icon flaticon-first-aid-kit"></span>
              <h2 class="text-primary">Medical Services</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
              <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <span class="icon flaticon-hospital-bed"></span>
              <h2 class="text-primary">Patient Services</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
              <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <span class="icon flaticon-doctor"></span>
              <h2 class="text-primary">Expert Doctors</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
              <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  
  
  
  <div class="the-news" id="services">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Our Services</h2>
          
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="the-news-wrap">
                <figure class="post-thumbnail">
                  <a href="#"><img src="images/service-image-1.jpg" alt=""></a>
                </figure>
                
                <header class="entry-header">
                  <h3>Breast</h3>
                </header>
                
                <div class="entry-content">
                  <p>Breast augmentation procedure is for those who wish to achieve fuller breasts or to restore lost volume.</p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
              <div class="the-news-wrap">
                <figure class="post-thumbnail">
                  <a href="#"><img src="images/service-image-4.jpg" alt=""></a>
                </figure>
                
                <header class="entry-header">
                  <h3>Body</h3>
                </header>
                
                <div class="entry-content">
                  <p>The standard amount of fat that can be removed should be about 3 to 5% of the total body weight.</p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
              <div class="the-news-wrap">
                <figure class="post-thumbnail">
                  <a href="#"><img src="images/service-image-3.jpg" alt=""></a>
                </figure>
                
                <header class="entry-header">
                  <h3>Face</h3>
                </header>
                
                <div class="entry-content">
                  <p>The face, compared to any other body feature, is the reflection of personality.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="the-news-wrap">
                <figure class="post-thumbnail">
                  <a href="#"><img src="images/service-1.png" alt=""></a>
                </figure>
                
                <header class="entry-header">
                  <h3>Hair</h3>
                </header>
                
                <div class="entry-content">
                  <p>Hair transplant is one of the more common Cosmetic Surgery procedure in men and increasingly in women as well.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="the-news-wrap">
                <figure class="post-thumbnail">
                  <a href="#"><img src="images/robotics.png" alt=""></a>
                </figure>
                
                <header class="entry-header">
                  <h3>Robotic Hair Transplant</h3>
                </header>
                
                <div class="entry-content">
                  <p>Divine Cosmetic Surgery and Dr Amit Gupta proudly present the state of the art Robotic hairtransplant. The machine is HAARTS with a very advanced in built computer that gauges the pressure of extraction based on skin quality improving the graft survival leading to better results.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="the-news-wrap">
                <figure class="post-thumbnail">
                  <a href="#"><img src="images/six-pack.png" alt=""></a>
                </figure>
                
                <header class="entry-header">
                  <h3>Vaser Six Pack</h3>
                </header>
                
                <div class="entry-content">
                  <p>Dr Gupta frequently performs 4 Dimensional body Contouring procedures like 6 Pack Procedure, Hour glass figure procedure in women, deltoid shaping, pectoral shaping etc. He has trained with Dr Alfredo Hoyos in Columbia, who is the inventor of these procedures.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- <div class="subscribe-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2>Subscribe to our newsletter</h2>
          
          <form>
            <input type="email" placeholder="E-mail address">
            <input class="button gradient-bg" type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div> -->
  
  
  <div class="medilife-emergency-area section-padding-100-50" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="emergency-content">
            <i class="icon-smartphone"></i>
            <h2>For Emergency calls</h2>
            <h3>+12-823-611-8721</h3>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <!-- Single Emergency Helpline -->
            <div class="col-12 col-sm-6">
              <div class="single-emergency-helpline mb-50">
                <h5>CLINIC 1</h5>
                <p>98119 94417 <br> L 7 South Extention Part 2 <br> New Delhi 110049, INDIA</p>
              </div>
            </div>
            <!-- Single Emergency Helpline -->
            <div class="col-12 col-sm-6">
              <div class="single-emergency-helpline mb-50">
                <h5>CLINIC 2</h5>
                <p>99999 72949 <br> Plot No 4, Jalvayu Vihar Road, Sector 31 <br> Gurgaon, Haryana 122003, INDIA</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="site-footer">
    <div class="footer-widgets">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="foot-about">
              <h2><a href="#"><img src="images/logo.png" alt=""></a></h2>
              <p>
                There’s no better expression to being beautiful than being yourself. When you are yourself, you exude a kind of self confidence that is unparalleled.
              </p>
            </div>
            <!-- .foot-about -->
          </div>
          <!-- .col -->
          
          <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
            <div class="foot-contact">
              <h2>Contact</h2>
              
              <div class="footer-contact-form">
                 <?php 
            if($_POST["submit"]) {
              $recipient="xyz@gmail.com, digvijay6666@gmail.com, gargdee@gmail.com, consultant@divinecosmeticsurgery.com, amit@divinecosmeticsurgery.com, deepti@divinecosmeticsurgery.com, info@divinecosmeticsurgery.com";
              $senderSubject=@$_POST["senderSubject"];
              $sender=@$_POST["sender"];
              $senderEmail=@$_POST["senderEmail"];
              $senderNum=@$_POST["senderNum"];
              $mailBody="Name: $sender\nEmail: $senderEmail\nNumber: $senderNum\n\n";
              mail($recipient, $mailBody, "From: $sender <$senderEmail>");
              $thankYou="<p>Thank you! Your message has been sent.</p>";
            }
            ?>
                <form action="#" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="fname2" name="sender" class="form-control" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="email" name="senderEmail" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="num" name="senderNum" class="form-control" placeholder="Phone No" required>
                  </div>
                  <input type="submit" class="btn btn-primary btn-learn btn-submit medilife-btn" name="submit" value="Submit">
                </form>
              </div>
            </div>
          </div><!-- .col -->
          
          <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
            <div class="foot-links">
              <h2>Usefull Links</h2>
              
              <ul class="p-0 m-0 main-menu" >
                <li><a href="index.html">Home</a></li>
                <li><a href="#about-us">About us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
              </ul>
            </div>
            <!-- .foot-links -->
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book An Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="sender" placeholder="Full Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="senderEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="senderNumber" placeholder="Phone Number" required>
            </div>
            <input type="submit" class="btn btn-primary btn-learn btn-submit" name="submit" value="Submit">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>

  <script type='text/javascript' src='js/swiper.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script type='text/javascript' src='js/bootstrap.min.js'></script>
  <script type='text/javascript' src='js/jquery.validate.min.js'></script>
  <script type='text/javascript' src='js/custom.js'></script>
  
</body>
</html>