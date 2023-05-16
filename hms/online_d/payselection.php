<?php error_reporting(0);
include ('../include/config.php');


	/*	if(isset($_POST['submit'])) {
	
      $query = "SELECT email from onlinec where id=(SELECT max(id) FROM onlinec)" ;
      
      if ($result = $con->query($query)) {    
        while ($row = $result->fetch_object()) {
           $email = $row->email;
      
        }
			require '../PHPMailerAutoload.php';
			require '../credential.php';

			$mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'DOC+');
			$mail->addAddress($email);     // Add a recipient
			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			/*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}*/
		/*	$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Get In Touch';
			$mail->Body    = '<b>Thank You. We Will Contact You Soon. </b>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
        echo "<script>alert('Your Message Has Been Sent Successfully'); window.location.href='online.php';</script>";
			}
		}}*/

   /* if(isset($_POST['submit']))
  {

    if(!$con){
      die("Connection Failed:" .mysqli_connect_error());
    }

    $sql = "UPDATE appointment SET paymentstatus=1 WHERE MAX(id)";
  
    if(mysqli_query($con,$sql)==true){ 
      echo "<script>alert('Your Appointment Successfully Booked'); window.location.href='online.php';</script>";
     }
    else{
      "Error: "."<br>".mysqli_error($con);
    }
    mysqli_close($con);

}*/
	  


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DOC+</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

  <!-- Vendor CSS Files -->
  <link href="../assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets1/css/style.css" rel="stylesheet">
  <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
  <script language ="javascript" type="text/javascript">
function Successful(){
  let prompt="Your Appoinment Is Successfully Booked";
  let video="Your video confference will start";

alert(prompt);
location.href = "online.php";
alert(video);



}

</script>
</head>

<body>

<style>
.field {
  margin-bottom: 25px;
}
.field.full {
  width: 100%;
}
.field.half {
  width: calc(50% - 12px);
}
.field label {
  display: block;
  text-transform: uppercase;
  font-size: 12px;
  margin-bottom: 8px;
}
.field input {
  padding: 12px;
  border-radius: 6px;
  border: 2px solid #e8ebed;
  display: block;
  font-size: 14px;
  width: 100%;
  box-sizing: border-box;
}
.field input:placeholder {
  color: #e8ebed !important;
}
.flex {
  display: flex;
  flex-direction: row wrap;
  align-items: center;
}
.flex.justify-space-between {
  justify-content: space-between;
}
.card {
  padding: 50px;
  margin: 50px auto;
  max-width: 850px;
  background: #fff;
  border-radius: 6px;
  box-sizing: border-box;
  box-shadow: 0px 24px 60px -1px rgba(37,44,54,0.14);
}
.card .container {
  max-width: 700px;
  margin: 0 auto;
}
.card .card-title {
  margin-bottom: 50px;
}
.card .card-title h2 {
  margin: 0;
}
.card .card-body .payment-type,
.card .card-body .payment-info {
  margin-bottom: 25px;
}
.card .card-body .payment-type h4 {
  margin: 0;
}
.card .card-body .payment-type .types {
  margin: 25px 0;
}
.card .card-body .payment-type .types .type {
  width: 30%;
  position: relative;
  background: #f2f4f7;
  border: 2px solid #e8ebed;
  padding: 25px;
  box-sizing: border-box;
  border-radius: 6px;
  cursor: pointer;
  text-align: center;
  transition: all 0.5s ease;
}
.card .card-body .payment-type .types .type:hover {
  border-color: #28333b;
}
.card .card-body .payment-type .types .type:hover .logo,
.card .card-body .payment-type .types .type:hover p {
  color: #28333b;
}
.card .card-body .payment-type .types .type.selected {
  border-color: #40b3ff;
  background: rgba(64,179,255,0.1);
}
.card .card-body .payment-type .types .type.selected .logo {
  color: #40b3ff;
}
.card .card-body .payment-type .types .type.selected p {
  color: #28333b;
}
.card .card-body .payment-type .types .type.selected::after {
  content: '\f00c';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  position: absolute;
  height: 40px;
  width: 40px;
  top: -21px;
  right: -21px;
  background: #fff;
  border: 2px solid #40b3ff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.card .card-body .payment-type .types .type .logo,
.card .card-body .payment-type .types .type p {
  transition: all 0.5s ease;
}
.card .card-body .payment-type .types .type .logo {
  font-size: 48px;
  color: #8a959c;
}
.card .card-body .payment-type .types .type p {
  margin-bottom: 0;
  font-size: 10px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.5px;
  color: #8a959c;
}
.card .card-body .payment-info .column {
  width: calc(50% - 25px);
}
.card .card-body .payment-info .title {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.card .card-body .payment-info .title .num {
  height: 24px;
  width: 24px;
  border-radius: 50%;
  border: 2px solid #40b3ff;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  margin-right: 12px;
  font-size: 12px;
}
footer {
  margin: 50px auto;
  max-width: 850px;
  text-align: center;
}
.button {
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 0.5px;
  padding: 15px 25px;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.5s ease;
  background: transparent;
  border: 2px solid transparent;
}
.button.button-link {
  padding: 0 0 2px;
  margin: 0 25px;
  border-bottom: 2px solid rgba(64,179,255,0.5);
  border-radius: 0;
  opacity: 0.75;
}
.button.button-link:hover {
  border-bottom: 2px solid #40b3ff;
  opacity: 1;
}
.button.button-primary {
  background: #40b3ff;
  color: #fff;
}
.button.button-primary:hover {
  background: #218fd9;
}
.button.button-secondary {
  background: transparent;
  border-color: #e8ebed;
  color: #8a959c;
}
.button.button-secondary:hover {
  border-color: #28333b;
  color: #28333b;
}
</style>

</script>

<form action="" method="post">
<article class="card">
	<div class="container">
		<div class="card-title">
			<h2><center>Payment Portal</center></h2>
		</div>
		<div class="card-body">
			
            <div id=card>
			<div class="payment-info flex justify-space-between">
				<div class="column billing">
					<div class="title">
						<div class="num">1</div>
						<h4>Billing Info</h4>
					</div>
					<div class="field full">
						<label for="name">Full Name</label>
						<input id="name" type="text" placeholder="Full Name">
					</div>
					<div class="field full">
						<label for="address">Billing Address</label>
						<input id="address" type="text" placeholder="Billing Address">
					</div>
					<div class="flex justify-space-between">
						<div class="field half">
							<label for="city">City</label>
							<input id="city" type="text" placeholder="City">
						</div>
						<div class="field half">
							<label for="state">State</label>
							<input id="state" type="text" placeholder="State">
						</div>
					</div>
					<div class="field full">
						<label for="zip">Zip</label>
						<input id="zip" type="text" placeholder="Zip">
					</div>
				</div>
				<div class="column shipping">
					<div class="title">
						<div class="num">2</div>
						<h4>Credit Card Info</h4>
					</div>
					<div class="field full">
						<label for="name">Cardholder Name</label>
						<input id="name" type="text" placeholder="Full Name">
					</div>
					<div class="field full">
						<label for="address">Card Number</label>
						<input id="address" type="text" placeholder="1234-5678-9012-3456">
					</div>
					<div class="flex justify-space-between">
						<div class="field half">
							<label for="city">Exp. Month</label>
							<input id="city" type="text" placeholder="12">
						</div>
						<div class="field half">
							<label for="state">Exp. Year</label>
							<input id="state" type="text" placeholder="19">
						</div>
					</div>
					<div class="field full">
						<label for="zip">CVC Number</label>
						<input id="zip" type="text" placeholder="468">
					</div>
				</div>
			</div>
		</div>
		<div class="card-actions flex justify-space-between">
		<div class="flex-start">
    
				<a href="../../index.php" button class="button button-link">Return</button></a>
    </div>
    <div class="flex-end">
    <button class="button button-secondary" onclick="Successful()">Confirm Payment</button>
			</div>	
  
		
		</div>
	</div>
</div>
</article>


<!-- Vendor JS Files -->
<script src="../assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets1/vendor/php-email-form/validate.js"></script>
  <script src="../assets1/vendor/purecounter/purecounter.js"></script>
  <script src="../assets1/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets1/js/main.js"></script>

 <article>
   <div class="body">
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
          <li><i class="bx bx-chevron-right"></i> <a href="home.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="home.php #about">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="home.php #services">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="../book-appointment.php">E-Channeling</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Online Consulting </a></li>
          
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <img src="../assets/img/Doc+ logo.png" alt="" class="img-fluid">
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
      </div>
      </article>
      </body>
</html>