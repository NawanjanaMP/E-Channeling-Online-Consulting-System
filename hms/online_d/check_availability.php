<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["doctor"])) {
  $query = "SELECT * FROM doctorslog WHERE username='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>