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
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$contactnumber=$_POST['contactnumber'];
$age=$_POST['age'];
$email=$_POST['email'];
$medihis=$_POST['medihis'];
$userstatus=1;
$docstatus=1;
$adminstatus=1;
$paymentstatus=0;
$num_rows=0;
$result=0;
$paymentstatus=$_POST['paymentstatus'];

	if(!$con){
		die("Connection Failed:" .mysqli_connect_error());
	}

	
/*$sql = "SELECT * FROM `appoinment` WHERE DATE(`appintmentdate`) = '$appdate' AND (doctorId) ='$doctorid'" ;

$result = mysqli_query($con, $sql);
//get total records
$num_rows = mysqli_num_rows($result);

if($num_rows>2)
{*/
	$query="INSERT INTO appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,userStatus,doctorStatus,adminStatus,startdoctime,fullName,address,city,gender,contactnumber,age,medihis,paymentstatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$userstatus','$docstatus','$adminstatus','$startdoctime','$fullName','$address','$city','$gender','$contactnumber','$age','$medihis','$paymentstatus')";
	
	if(mysqli_query($con,$query)==true)
	{
		echo "<script>alert('Please Enter Your Payment Details'); window.location.href='payselection.php';</script>";
	}
	else{
		"Error: "."<br>".mysqli_error($con);
	}
    //Today booked orders is completed
/*}
else
{
	echo "<script>alert('Maximum Number Of Bookings Have Reached For This Day. Please Choose Another Date'); window.location.href='book-appointment.php';</script>";
    //The booked orders is not completed for today
}*/
	
	
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


<script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("fullName").value = "";
				document.getElementById("address").value = "";
                document.getElementById("city").value = "";
				document.getElementById("email").value = "";
                document.getElementById("gender").value = "";
				document.getElementById("contactnumber").value = "";
                document.getElementById("age").value = "";
				document.getElementById("paymentstatus").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById
                        ("fullName").value = myObj[0];
                          
                        // Assign the value received to
                        // last name input field
						document.getElementById
                        ("address").value = myObj[1];

                        document.getElementById
                        ("city").value = myObj[2];
						
						document.getElementById
                        ("email").value = myObj[3];

						document.getElementById
                        ("gender").value = myObj[4];
                    
						document.getElementById
                        ("contactnumber").value = myObj[5];
                    
						document.getElementById
                        ("age").value = myObj[6];

						
                    
                    }
					
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "phpm.php?get_id=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
    
	
    </div>
  </header>
  </section>
  <?php include('include/header.php');?>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
			</br>	
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE --></br>	
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
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
<h5 style="color: #1ec9eb;"><span>This appointment is for</span></h5>
	 <div>&nbsp;
	<label><input type="radio" name="colorRadio1" id="get_id" onclick="GetDetail(this.value)" value="<?php echo htmlentities($_SESSION['id']);?>"> To Yourself </label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type="radio" name="colorRadio2" id="clear" onclick="this.form.reset();" >To Another Patient</label>	
		</div>

			<div class="panel-body">
			<form role="form" name="" method="post">

			<div class="form-group">
			<label for="fullName">
			Patient Name
			</label>
			<input type="text" name="fullName" id="fullName" class="form-control"  placeholder="Enter Patient Name" required="true">
			</div>

			<div class="form-group">
			<label for="address">
			Patient Address
			</label>
			<input type="text" name="address" id="address" class="form-control"  placeholder="Enter Patient Address" required="true">
			</div>

			<div class="form-group">
			<label for="city">
			City
			</label>
			<input type="text" name="city" id="city" class="form-control"  placeholder="Enter City" required="true">
			</div>

			<div class="form-group">
			<label for="email">
			Patient Email
			</label>
			<input type="email" id="email" name="email" class="form-control"  placeholder="Enter Patient Email id" required="true" onBlur="userAvailability()">
			<span class="error"><?php echo $emailErr;?></span>
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

</br>

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
						<select name="doctor" class="form-control" id="doctor" onChange="gettime(this.value) , getfee(this.value); " required="required">
						<option value="">Select Doctor</option>
						</select>
														</div>
														<div class="form-group">
															<label for="consultancyfees">
																Consultancy Fees (Rs.)
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

														<div class="form-group">
					<label for="medihis">
					Medical History
					</label>
					<textarea type="text" name="medihis" id='medihis' class="form-control"  placeholder="Enter Patient Medical History(if any)" required="true"></textarea>
					</div>	
					
					<div class="form-group">
			<label for="paymentstatus">
			Payment Method
			</label>
			<select name="paymentstatus" id="paymentstatus" class="form-control" required="required">
                                            <option value="">Select Your Payment Method</option>
											<option value="Cash">Cash Payment</option>
											<option value="Card">Card Payment</option>
			</select>
			</div>
													
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Proceed To Pay
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



		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>


	</body>
</html>
