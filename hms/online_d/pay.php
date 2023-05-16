
<?php //error_reporting(0);
include ('../include/config.php');


if(isset($_POST['submit'])) {
	/*
      $sql = "SELECT email from onlinec where id=(SELECT max(id) FROM onlinec)" ;
      $result = mysqli_query($con, $sql);
      
      
      
			require 'PHPMailerAutoload.php';
			require 'credential.php';

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
			$mail->addAddress($row['email']);     // Add a recipient
			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			/*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Get In Touch';
			$mail->Body    = '<b>Thank You. We Will Contact You Soon. </b>';
			

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {*/
        echo "<script>alert('Your Message Has Been Sent Successfully'); window.location.href='online.php';</script>";
			//}
		}
	  


?>

<style>
*{
  margin:0;
  padding:0;
}
body{
  height:100vh;
  overflow:hidden;
  background:linear-gradient(-40deg,white,lightgrey);
  box-sizing:border-box;
  font-family: "Montserrat", sans-serif;
}
#wrapper{
  height:480px;
  width:700px;
  background:#fff;
  border:1px solid grey;
  border-radius:10px;
  margin:3em auto 0 auto;
  overflow:hidden;
  box-shadow:0px 2px 25px #000;
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
  border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:45%;
}
.row:nth-of-type(2) .col-xs-5 input{
  border:2px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
}
.row .col-xs-5 input:focus, .row:nth-of-type(3) .col-xs-2 input:focus{
  border-color:green;
  outline:0;
}
label{
  position:relative;
}
 .fa{
  position:absolute;
  right:25px;
  bottom:10px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 input{
  height:35px;
  border:2px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:.70em;
}
footer{
  height:80px;;
  background:#e6e6e6;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  align-items:center;
}
footer .btn{
  margin:50px 15px 55px 15px;
  border-radius:20px;
  padding:.65em 1.6em;
}
footer :nth-child(1){
  background-color:#fff;
  color:#f62f5e;
}
footer :nth-child(2){
  background-color:#f62f5e;
  color:#fff;
}
.col-xs-5.highlight{
  border:solid 1px blue;
}
</style>
<head>
<link href="../assets1/css/style.css" rel="stylesheet">
<script>
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
</head>
<form action="" method="post">
<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='card'>
    <input id="card" class="form-check-input" type="checkbox" name="check" value="" onclick="onlyOne(this)">
    Pay with Credit card
  </label>
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='paypal'>
    <input id="paypal" class="form-check-input" type="checkbox" name="check" value="" onclick="onlyOne(this)">
    Pay with PayPal
  </label>
</div>

    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <div class="row">
    <div class="col-xs-5">
      <i class="fa fa fa-user"></i>
      <label for="cardholder">Cardholder's Name</label>
      <input type="text" id="cardholder">
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="text" id="cardnumber">
    </div><!--col-xs-5-->
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <i class="fa fa-calendar"></i>
      <label for="date">Valid thru</label>
      <input type="text" placeholder="MM/YY" id="date">
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label>
      <input type="text">
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <footer>
    <button class="btn">Back</button>
    <button type="submit" name="submit" class="btn">Next Step</buton>
    <button type="submit" name="submit"  class="btn btn-o btn-primary">
															Proceed To Pay
														</button>
  </footer>
</div><!--wrapper end-->

<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" ></script>