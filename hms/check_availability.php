<?php 
require_once("include/config.php");
if(!empty($_POST["email"])) {

	$email= $_POST["email"];
	
		$result =mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
	echo "<span style='color:red'> Email already exists .</span>";
	echo "<script>$('#submit').prop('disabled',true);</script>";
	
} else{
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format";
		
	  }
	else{
		echo "<span style='color:green'> Email available for Registration .</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}
}


?>
