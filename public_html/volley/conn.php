<?php
$hostname = "localhost";
$database = "db_b130736cs";
$username = "b130736cs";
$password = "b130736cs";

echo "conected";

$con = mysqli_connect($hostname, $username, $password,$database);
if($con)
echo "conected";
else {
  echo "not connected"
}

 ?>
