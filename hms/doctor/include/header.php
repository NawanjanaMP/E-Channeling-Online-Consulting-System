<?php error_reporting(0);?>
<head>

<link href="../assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link href="../assets1/css/style.css" rel="stylesheet">

<link href="../favicon.png" rel="icon">
  <link href="../assets/images/apple-touch-icon.png" rel="apple-touch-icon">

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
      <a href="../index.php" class="logo me-auto"><img src="../assets/img/Doc+ logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="home.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="home.php #services">Services</a></li>
          <li><a class="nav-link scrollto" href="home.php #departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="healthlibrary.php">Heath Library</a></li>
          <li><a class="nav-link scrollto" href="home.php #contact">Contact</a></li>
          
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
     

        <ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:2% ">
								
							</li>
						
						
							<li class="dropdown current-user">
								<a data-toggle="dropdown-toggle">
									<img src="../assets/images/doctor.png"> <span class="username">



									<?php $query=mysqli_query($con,"select doctorName from doctors where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['doctorName'];
}
									?> <!--<i class="ti-angle-down"></i></i>--></span>
								</a>
								<ul class="dropdown-menu dropdown">
									<li>
										<a href="edit-profile.php">
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
        


      </nav><!-- .navbar -->
					<!-- start: NAVBAR HEADER -->
					
						
				

					
					<!-- end: NAVBAR COLLAPSE -->
				</header>
