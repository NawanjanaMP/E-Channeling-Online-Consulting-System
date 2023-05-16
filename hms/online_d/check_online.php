
<?php
require_once("include/config.php");
if(!empty($_POST["doctor"])) {
    
    
	$doctorid=$_POST['doctor'];
	
    $result =mysqli_query($con,"SELECT loginTime FROM doctorslog WHERE uid='$doctorid'  AND status='1' AND  ISNULL(logout) AND id=(SELECT max(id) FROM doctorslog)");
    $count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:blue'>Doctor is Now online : $count .</span>";
echo "<script>$('#submit').prop('disabled',true);</script>";

} else{
   
    echo "<span style='color:red'>Doctor is Not online : $count .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
}
}

mysqli_close($con);
?>