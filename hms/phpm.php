<?php
  
// Get the user id 
$get_id = $_REQUEST['get_id'];
  
// Database connection
$con = mysqli_connect("localhost", "root", "", "doc+");
  
if ($get_id !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT fullName, 
    city, address, email, gender, contactnumber, age FROM users WHERE id='$get_id'");
  
    $row = mysqli_fetch_array($query);
  
    // Get the first name
    $fullName = $row["fullName"];
  
    $address = $row["address"];
    // Get the first name
    $city = $row["city"];

    $email = $row["email"];

    $gender = $row["gender"];

    $contactnumber = $row["contactnumber"];

    $age = $row["age"];
}
  
// Store it in a array
$result = array("$fullName", "$address", "$city","$email","$gender","$contactnumber","$age");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>