<?php

include('include/config.php');


// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtSubject = $_POST['txtSubject'];
$txtMessage = $_POST['txtMessage'];


$query=mysqli_query($con,"insert into contactus(`uname`, `email`, `esubject`, `emessage`) VALUES ('$txtName', '$txtEmail', '$txtSubject', '$txtMessage')");
	if($query)
	{
		echo "<script>alert('Your Message Succesfully Send');</script>";
	}

?>