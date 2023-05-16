<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$startdoctime=$_POST['startdoctime'];
$fullName=$_POST['fullName'];

$city=$_POST['city'];
$gender=$_POST['gender'];
$contactnumber=$_POST['contactnumber'];
$age=$_POST['age'];
$email=$_POST['email'];

$userstatus=1;
$docstatus=1;
$adminstatus=1;

$time=time();
$date=date('d-m-y');
$tbl_name="doctorslog";


	if(!$con){
		die("Connection Failed:" .mysqli_connect_error());
	}


	if(!empty($_POST["doctor"])) {
	

		$sql="SELECT * FROM $tbl_name WHERE 'uid'='$doctorid' AND 'logindate'='$date' AND 'status'='1' AND `logint` - $time<3600";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		
		if($count==1) {
			echo "<script>alert('Doctor Not Available'); window.location.href='onlineconsul.php';</script>";
		
		}
		// Close connection
		}

		else{
	$query="INSERT INTO onlinec(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,userStatus,doctorStatus,adminStatus,startdoctime,fullName,city,gender,contactnumber,age) values('$specilization','$doctorid','$userid','$fees','$appdate','$userstatus','$docstatus','$adminstatus','$startdoctime','$fullName','$city','$gender','$contactnumber','$age')";

	if(mysqli_query($con,$query)==true)
	{
		echo "<script>alert('Please Make Your Payment'); window.location.href='online.php';</script>";
	}
	else{
		"Error: "."<br>".mysqli_error($con);
	}}
	mysqli_close($con);

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Book Appointment</title>
	
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

		<link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link href="assets1/css/style.css" rel="stylesheet">
 <style>


.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets2/img/hero-bg.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: red;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
		<script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	
<script>
function gettime(val) {
	$.ajax({
	type: "POST",
	url: "get_time.php",
	data:'doctor='+val,
	success: function(data){
		$("#startdoctime").html(data);
	}
	});
}
</script>


    </div>
  </header>
  </section>
  <?php include('include/header.php');?>
  <div class="hero-image">
  
  <div class="hero-text" >
  <div class="container" style="text-align: left;">
  <h1 style="color:#4287f5;font-size:90px;">DOC+</h1>
      <h2 style="color:white;" > Online Consulting</h2>
      <a href="#book" class="btn-get-started scrollto" style="color: red;">Consult Your Doctor</a>
	</div>
  </div>
</div>
		<div id="app">	
			  <!-- ======= Hero Section ======= -->
			<div class="app-content">
	<!-- end: TOP NAVBAR -->
	<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE --></br>	
<!-- start: BASIC EXAMPLE -->
<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
	<form role="form" name="book" method="post" >
													<div class="form-group">
<div class="form-group">

			<div class="panel-body">
			<form role="form" name="" method="post">

			<div class="form-group">
			<label for="fullName">
			Patient Name
			</label>
			<input type="text" name="fullName" id="fullName" class="form-control"  placeholder="Enter Patient Name" required="true">
			</div>

			<div class="form-group">
			<label for="city">
			City
			</label>
			<input type="text" name="city" id="city" class="form-control"  placeholder="Enter Patient Address" required="true">
			</div>

			<div class="form-group">
			<label for="email">
			Patient Email
			</label>
			<input type="email" id="email" name="email" class="form-control"  placeholder="Enter Patient Email id" required="true" onBlur="userAvailability()">
			<span id="user-availability-status1" style="font-size:12px;"></span>
			</div>

			<div class="form-group">
			<label for="gender">
			Gender (Male/Female)
			</label>
			<input type="text" name="gender" id="gender" class="form-control"  placeholder="Gender" required="true">
			</div>
			
			
			<div class="form-group">
			<label for="age">
			Patient Age
			</label>
			<input type="text" name="age" id="age" class="form-control"  placeholder="Enter Patient Age" required="true">
			</div>

			<div class="form-group">
			<label for="contactnumber">
			Patient Contact Number
			</label>
			<input type="text" name="contactnumber" id="contactnumber"  class="form-control"  placeholder="Enter Patient Contact Number" required="true" maxlength="10" pattern="[0-9]+"  value="">
			
		</div>

			<label for="DoctorSpecialization">
			Doctor Specialization
			</label>
			<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
			<option value="" style="font-size:12px;" >Select Specialization</option>
			<?php $ret=mysqli_query($con,"select * from doctorspecilization");
			while($row=mysqli_fetch_array($ret))
			{?>
			<option value="<?php echo htmlentities($row['specilization']);?>"><?php echo htmlentities($row['specilization']);?>
			</option>
			<?php } ?> 
			</select>
											
														<div class="form-group">
															<label for="doctor">
																Doctors
															</label>
						<select name="doctor" class="form-control" id="doctor" onBlur="check_online()" onChange="gettime(this.value) , getfee(this.value); " required="required">
						<option value="">Select Doctor</option>
						</select>
						<span id="doctor-online-status1" style="font-size:12px;"></span>
														</div>
														<div class="form-group">
															<label for="consultancyfees">
																Consultancy Fees
															</label>
					<select name="fees" class="form-control" id="fees"  readonly>
						
						</select>
														</div>
														
					<div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
					<input class="form-control datepicker" name="appdate" id="appdate" required="required"  data-date-format="yyyy-mm-dd">
	
														</div>
														<div class="form-group">
															<label for="startdoctime">
																Time
															</label>
					<select name="startdoctime" class="form-control" id="startdoctime"  readonly>
						
						</select>
					</div>
				
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
												</div>
											</div>
										</div>
											</div>
											
											</div>
										</div>
									
									</div>
								</div>
								</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
		</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
			
			
			<!-- end: SETTINGS -->
		</div>
		<!-- ======= Footer ======= -->
 
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',	
    startDate: 'd'
	
});
		</script>

<script>
function check_onine() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_online.php",
data:'doctor='+$("#doctor").val(),
type: "POST",
success:function(data){
$("#doctor-online-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>



		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
