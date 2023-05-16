<?php session_start();
//error_reporting(0);
include('../include/config.php');



if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$fees=$_POST['fees'];
$fullName=$_POST['fullName'];
$gender=$_POST['gender'];
$contactnumber=$_POST['contactnumber'];
$age=$_POST['age'];
$email=$_POST['email'];

$time=time();
$time_check=$time-600;
// $date=date('Y-m-d');
//$tbl_name="doctorslog";
 

//$date = time();

/*
$then = date('Y:m:d 02:00:00');


//Get the difference in seconds.
$diff = $now - $thenTimestamp;


    $origin   = '00:00:00';
    $fromTime = '02:00:00'; // $fromTime = date('H:i:s',strtotime($from_time))
    $toTime = date('H:i:s');  //// $toTime= date('H:i:s',strtotime($to_time))
    
    $diff = (strtotime($toTime) - strtotime($fromTime)) + strtotime($origin);
*/
	/*if(!$con){
		die("Connection Failed:" .mysqli_connect_error());
	}*/
    /*if(!empty($_POST["doctor"])) {

		$sql="SELECT loginTime FROM doctorslog WHERE uid='$doctorid'  AND status='1' AND  ISNULL(logout) AND id=(SELECT max(id) FROM doctorslog)";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);*/

        //$diff=htmlentities($row['loginTime'])-$date;
        //$diff = $date - $result;
        /*
		$ret=mysqli_query($con,"SELECT * from doctorslog WHERE uid=$doctorid AND loginTime=$date AND status='1' AND ISNULL(logout)");
            $sql2="SELECT * FROM doctorslog WHERE uid=$doctorid AND $diff<=logint AND logindate=$date AND status='1'";
            while($row=mysqli_fetch_array($ret)){
                echo htmlentities($row['logindate']);
            }
            $result2=mysqli_query($con,$sql2);
		$count2=mysqli_num_rows($result2);
        */
        
        //echo "<script>alert('$count $diff $date $doctorid'); window.location.href='index.php';</script>";
		//if($count==0) {
			//$ret=mysqli_query($con,"SELECT * from doctorslog WHERE id=(SELECT max(id) FROM doctorslog)");
            //$sql2="SELECT * FROM doctorslog WHERE max(id)";
           // while($row=mysqli_fetch_array($ret)){
          //      echo htmlentities($row['username']);
          ///  }
           // $result2=mysqli_query($con,$ret);
		   // $count2=mysqli_num_rows($result2);
        /*if($count==0){
        
        echo "<script>alert('Sorry. Doctor You Selected Is Not Available'); window.location.href='index.php';</script>";
        
        }
		
		else if($count==1){*/
           /* $query="INSERT INTO onlinec(doctorSpecialization,doctorId,consultancyFees,fullName,gender,contactnumber,age,email) values('$specilization','$doctorid','$fees','$fullName','$gender','$contactnumber','$age','$email')";

	if(mysqli_query($con,$query)==true)
	{
		echo "<script>alert('Video Conference Will Load Now'); window.location.href='online.php';</script>";
	}
	else{
		"Error: "."<br>".mysqli_error($con);
	}*/
	
/*}
else{
    echo "<script>alert('Error  $count'); window.location.href='index.php';</script>";
}
}*/
//mysqli_close($con);
//}

if(!$con){
    die("Connection Failed:" .mysqli_connect_error());
}
$query="INSERT INTO onlinec(doctorSpecialization,doctorId,consultancyFees,fullName,gender,contactnumber,age,email) values('$specilization','$doctorid','$fees','$fullName','$gender','$contactnumber','$age','$email')";

if(mysqli_query($con,$query)==true)
{
    echo "<script>alert('Please Make Your Payment'); window.location.href='payselection.php';</script>";
}
else{
    "Error: "."<br>".mysqli_error($con);
}
mysqli_close($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Consulting</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script>
function Successful(){

location.href = "../../index.php";

}</script>
    <script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "../get_doctor.php",
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
	url: "../get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Online Consulting</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullName">Name :</label>
                                <input type="text" name="fullName" id="fullName" required/>
                            </div>
                            <div class="form-group">
                            <label for="contactnumber">Patient Contact Number</label>
                            <input type="text" name="contactnumber" id="contactnumber" required/>
                        </div>
                            
                        </div>
                        <div class="form-group">
                                <label for="email">Patient Email</label>
                                <input type="text" name="email" id="email" required/>
                            </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value="Male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="Female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age">Age :</label>
                            <input type="text" name="age" id="age">
                        </div>
                            
                        <div class="form-row">
                            <div class="form-group">
                                <label for="DoctorSpecialization">
                                    Doctor Specialization
                                    </label>
                                <div class="form-select">
                                    
                                        <select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
                                            <option value="">Select Specialization</option>
                                            <?php $ret=mysqli_query($con,"select * from doctorspecilization");
                                            while($row=mysqli_fetch_array($ret))
                                            {?>
                                            <option value="<?php echo htmlentities($row['specilization']);?>"><?php echo htmlentities($row['specilization']);?>
                                            </option>
                                            <?php } ?> 
                                            </select>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            
                            <form action="" method="post">
                            <div class="form-group">
                            <label for="doctor">
																Doctors
															</label>
                                <div class="form-select">
                                <select name="doctor" class="form-control" id="doctor"  onChange="getfee(this.value); " onBlur="checkAvailability()" required="required">
						<option value=""   >Select Doctor</option>
						</select>

                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span> 
                                </div>
                             <?php  /*if(!empty($_POST['doctor'])) {
        $selected = $_POST['doctor'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }*/
                                  ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="consultancyfees">Consultancy Fees (Rs.)</label>
                            <select name="fees" class="form-control" id="fees"  readonly>
						</select>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Return To Home" class="submit" name="home" onclick="Successful()"/>
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Proceed Payment" class="submit" name="submit" id="submit" class="btn btn-o btn-primary"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
        function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
        </script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>