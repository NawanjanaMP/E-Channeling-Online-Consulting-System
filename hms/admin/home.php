<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DOC+</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">
  <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>



  <!-- =======================================================
  * Template Name: Medilab - v4.6.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@DOC+.com</a>
        <i class="bi bi-phone"></i> +94 11 333 3333 
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://twitter.com/GotabayaR" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/gotabayar" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/gotabayar/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="home.php" class="logo me-auto"><img src="assets/img/Doc+ logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Our Location</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
     

        <ul class="nav navbar-right">
              <!-- start: MESSAGES DROPDOWN -->
                <li  style="padding-top:2% ">
                
              </li>
            
            
              <li class="dropdown current-user">
                <a data-toggle="dropdown-toggle">
                  <img src="assets/images/admin.png" style="width:50px;height:50px;"> <span class="username">



                  <?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
  echo $row['fullName'];
}
                  ?> <i class="ti-angle-down"></i></i></span>
                </a>
                <ul class="dropdown-menu dropdown">
                  <li>
                    <a href="dashboard.php">
                      My Profile
                    </a>
                  </li>
                
                  <li>
                    <a href="change-password.php">
                      Change Password
                    </a>
                  </li>
                  <li>
                    <a href="logout.php">
                      Log Out
                    </a>
                  </li>
                </ul>
              </li>
              <!-- end: USER OPTIONS DROPDOWN -->
            </ul>
            <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
            <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
              <div class="arrow-left"></div>
              <div class="arrow-right"></div>
            </div>
            <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
          </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
        


      </nav>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="color:red;font-size:90px;">DOC+</h1>
      <h2>We'll Take Care of Your Health</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
               <h3>Why Choose DOC+?</h3>
              <p>
                We are able to meet you needs with our wide range of latest technology services and highly experienced and competent staff and doctors. We are part of a large organisation with an ethos of safety and quality patient care. 
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>E-Channeling</h4>
                    <p>eChannelling is a service that offers convenient booking facilities for Doctor Appointments at Our hospital.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Online Consulting</h4>
                    <p>Consult a Doctor from your home to get online medical advice via video and voice calls. Medical Advice is now at your fingertips.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Intermediate Care Centre for COVID 19 Patients</h4>
                    <p>We are ready to nurse COVID 19 positive patients back to good health and wellness.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=7vBeVxGqVwk" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <center><h3>OUR STORY</h3></center>
            <p>For more than seven decades, DOC+ has been a trusted name in Sri Lankan healthcare. We've built a reputation for regional leadership in medical excellence and innovation based on a simple philosophy: that improving our community's health should be driven by passion as well as compassion. We work with the best consultants, specialists, and employees in the industry, all of whom are committed to delivering exceptional clinical outcomes and complete customer satisfaction. We have evolved into a world-class tertiary care institute due largely to cutting-edge technology. </p>

            <div class="icon-box">
              <div class="icon" ><i class="bx bx-group"></i></div>
              <h4  class="title"><center><a href="">VISION</a></center></h4>
             
              <p class="description">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                AT THE FOREFRONT OF MEDICAL EXCELLENCE, DEFINING THE FUTURE OF SRI LANKAN HEALTHCARE.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>

            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-rocket"></i></div>
              <h4 class="title"><center><a href="">MISSION</a></center></h4>
              <p class="description">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                TO ENHANCE THE LIVES OF OUR COMMUNITY AT LARGE,
                BY UNFOLDING A PARADIGM SHIFT IN ALL SERVICE TIERS AND
                EXCELLING IN PREVENTATIVE AND COMPASSIONATE PATIENT CARE.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
            </div>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
     <section id="services" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/cardiac.png" class="testimonial-img" alt="">
                  <h3>Heart Care Center</h3>
                  <p>
                    
                    Cardiology is a broad field encompassing preventive care, screening, advanced diagnostic tests, invasive and non-invasive procedures, post-operative management, cardiac rehabilitation, and a full range of surgical programmes.
                    
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/ophthalmology.png" class="testimonial-img" alt="">
                  <h3>Eye Care Specialist</h3>
                  <p>
                    
                    The gift of eyesight is one we aim to restore and improve both in adults and children seeking the expertise of our specialists. Offering a range of eye care services, our team employs world-class diagnostic and surgical equipment, tailoring treatment to your individual needs.
                    
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/paediatrics.png" class="testimonial-img" alt="">
                  <h3>Child Care Center</h3>
                  
                  <p>
                    
                   Dedicated to the nurturing care of children, we provide excellence in medical, surgical and rehabilitative care, with paediatricians who are sensitive to children’s needs and responsive to parental concerns

                    
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/womens-health.png" class="testimonial-img" alt="">
                  <h3>Women's Health</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    DOC+ offers a comprehensive range of wellness programmes that provide diagnoses, treatment and support in the areas of health that most impact women’s lives.

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/neurology.png" class="testimonial-img" alt="">
                  <h3>Neurology Specialist</h3>
                  
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    DOC+ is a regional leader in the complex field of neurology and cutting-edge scientific research. Our skilled neurologists have had enormous success treating patients diagnosed with brain trauma, epilepsy, sleep disorders, strokes, and neck and spine conditions.

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

<div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src=https://www.durdans.com/wp-content/uploads/2016/04/gastroenterology.png class="testimonial-img" alt="">
                  <h3>Gastroenterology Specialist</h3>
                  
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our team of highly experienced gastroenterologists is on hand to treat a wide range of digestive conditions. Their focus: achieving an accurate diagnosis the first time, so you can receive the right treatment as soon as possible.

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

<div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/endocrinology.png" class="testimonial-img" alt="">
                  <h3>Endocrinology Specialist</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    With expertise in all aspects of endocrinology, our dedicated team offers a total care approach to people with diabetes, providing specialist and personalised guidance that enables the individual to keep their condition under control and lead a normal, healthy life


                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
          
          <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/ent.png"  class="testimonial-img" alt="">
                  <h3>ENT Center</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our otorhinolaryngology specialists have a distinguished record of treating a wide range of ear, nose and throat (ENT) conditions, as well as head and neck ailments. It was specialists at Durdans Hospital who performed Sri Lanka’s first ever unilateral cochlear transplant, with the assistance of regional experts.


                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/gen-surgery.png" class="testimonial-img" alt="">
                  <h3>General Surgery</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our experienced surgical teams bring together a culmination of expertise and treatment care plans across a range of sub-specialties. These expert surgeons have access to some of the region’s most advanced facilities, including a fully equipped laparoscopic theatre with cutting-edge video system and high-definition display.


                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/nephrology.png" class="testimonial-img" alt="">
                  <h3>Nephrology Specialist</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We take great care of patients who suffer from problems involving the kidneys or complex blood pressure issues. Comprehensive services for nephrology outpatient and inpatient care as well as renal dialysis services are provided by DOC+


                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/orthopedics.png" class="testimonial-img" alt="">
                  
                  <h3>Orthopedics Center</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    DOC+ is on par with the best centres in the region when it comes to providing the latest in orthopaedic treatments and orthopaedic surgical advancements

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://www.durdans.com/wp-content/uploads/2016/04/urology.png" class="testimonial-img" alt="">
                  <h3>Urology Specialist</h3>
                
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    In a field that requires expertly honed surgical skills, our urology specialists are among the region’s top surgeons. Their abilities and experience are enhanced by the world-class technology and equipment available to them at DOC+.

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>



          </div>
          <br/>
          <br/>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


   

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">ENT</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">DOC+ Heart Centre the pioneer dedicated center for heart care in Sri Lanka has been saving lives for 20+ years.  We are a JCI accredited centre focused on delivering end-to-end cardiac care. This multi-specialty center offers the entire spectrum of services ranging from cardiac emergency care, specialist consultations, investigations, catheter-based procedures to surgery.  Leading cardiac specialists are available to diagnose and treat common, complex, and rare cardiovascular diseases.</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Neurology</h3>
                    <p class="fst-italic">DOC+ is a regional leader in the complex field of neurology, dedicated to exceptional patient care and cutting-edge scientific research. Our skilled neurologists have had enormous success treating patients diagnosed with brain trauma, epilepsy, sleep disorders, strokes, and neck and spine conditions.</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hepatology</h3>
                    <p class="fst-italic">The Hepatology Centre provides care and treatment to patients with gastroenterology and liver diseases. The centre provides a comprehensive integrated service for the treatment of all forms of liver disease and operates a patient centred approach through multidisciplinary team care.</p>
                       </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Paediatrics</h3>
                    <p class="fst-italic">Dedicated to the nurturing care of children, we provide excellence in medical, surgical and rehabilitative care, with paediatricians who are sensitive to children’s needs and responsive to parental concerns. The paediatric unit is equipped with the latest in technology to offer the best possible treatment, from neonatal intensive care to general paediatrics. We also incorporate physical, mental, and psychological wellbeing into the individual care of your child, setting a strong foundation for their healthy growth.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Eye Care</h3>
                    <p class="fst-italic">The gift of eyesight is one we aim to restore and improve both in adults and children seeking the expertise of our specialists. Offering a range of eye care services, our team employs world-class diagnostic and surgical equipment, tailoring treatment to your individual needs.

</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>ENT</h3>
                    <p class="fst-italic">Our ENT specialists have a distinguished record of treating a wide range of ear, nose and throat (ENT) conditions, as well as head and neck ailments. They also have a history of groundbreaking medical feats – it was specialists at Durdans Hospital who performed Sri Lanka’s first ever unilateral cochlear transplant, with the assistance of regional experts.

                    As an ENT patient at Durdans Hospital, you will have an entire medical team focused on your healing journey, including skilled hearing therapists (audiologists), speech and language therapists and specialised nurses.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-6.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>When It Comes to FAQs, We Have the Answers You Need!</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Why should I select DOC+ as my health care provider? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Because we offer you the very best in clinical and non clinical service. Ours is a purpose-built facility for advanced healthcare, where a unique mix of best in class doctors and surgeons, both local and foreign, assure you of the best clinical outcomes. We have the most advanced diagnostics and laboratory services coupled with medical technology that is state of the art. DOC+ has proven to be the most cost-effective city hospital in Sri Lanka and we offer even the most advanced healthcare at a fraction of the cost abroad. Aside from the excellent clinical outcomes, you and your family can enjoy luxury accommodation that is affordable. Be assured of superior care, all round, and confidentiality at all times.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What are the facilities available at the Surgical OPD?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The OPD consists of 6 consultation rooms that are designed and equipped to international standards and comprises of a with surgical secretariat and a dressing room.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What are the facilities available at the SICU? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The SICU consists of 6 single room cubicles equipped with latest monitoring facilities to monitor invasive and none invasive parameters. Privacy is a key focus at the SICU and patients recieve separate cubicles giving them and the staff utmost privacy in handling and care giving. The Nurse’s station is facilitated with central monitoring and allows the nurses and staff to monitor all patients at all times (24/7) from nurse’s station.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What is the infection control rate? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Maintenance of sterility and prevention of Surgical Side Infection is considered of prime importance and as a protocol no infected cases are accepted into the SICU. Thorough cleaning is frequently done with culture swabs with the coordination of the infection control unit.
                  Currently infection rate is ‘0’.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What are the skill levels and nursing care at the surgical wards? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  All nurses have undergone especial surgical training and continuous training is being carried out to enhance their knowledge not only in medical care but also other areas in a bid to achieve service excellence and better patient handling.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
   
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets1/img/gallery1/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets1/img/gallery1/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Our Location</h2>
          
          
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.69598209754!2d79.92410741477295!3d6.926896694995152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25766a02febfd%3A0x5b68a0c35531ff9e!2sNational%20Institute%20of%20Mental%20Health!5e0!3m2!1sen!2slk!4v1634407411726!5m2!1sen!2slk"  frameborder="0" allowfullscreen></iframe>
        
      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DOC+</h3>
            <p>
              578 Elvitigala Mawatha <br>
              Colombo,00500<br>
              Sri Lanka <br><br>
              <strong>Phone:</strong> +94 11 333 3333 <br>
              <strong>Email:</strong> contact@DOC+.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-Channeling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Online Consulting </a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <img src="assets/img/Doc+ logo.png" alt="" class="img-fluid">
            <br/><br/>
            <h4><center>Your Health, Our Priority</center></h4>
            
            
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>DOC+</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by Team Inferno</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
         <a href="https://twitter.com/GotabayaR" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/gotabayar" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/gotabayar/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
  <!-- Vendor JS Files -->
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/purecounter/purecounter.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>