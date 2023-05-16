<?php
include('include/config.php');


if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select startdoctime from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['startdoctime']); ?>"><?php echo htmlentities($row['startdoctime']); ?></option>
  <?php
}
}


?>

