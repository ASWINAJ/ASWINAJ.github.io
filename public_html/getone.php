<?php

require_once("conn.php");

$email = $_POST['email'];
$password = $_POST['password'];


  if(!empty($_POST['email']) && !empty($_POST['password']))
  {

  $query = "select * from mydata where email='$email' AND password='$password'";
  $result = mysqli_query($con,$query);

  if($result)
  {

  if (mysqli_num_rows($result) > 0) {
    echo "success";
}
else {
echo "failure";
}
}



  }
  else {
echo "failure";
  }



 ?>
