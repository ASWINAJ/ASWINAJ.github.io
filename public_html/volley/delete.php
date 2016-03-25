<?php

$hostname = "localhost";
$database = "hive";
$username = "root";
$password = "amma";

$conn = mysqli_connect($hostname, $username, $password,$database);

if($conn)
echo "connected";
else
  echo "not connected";


  if(!empty($_POST['pid']))
  {
  $pid=$_POST['pid'];
  $query = "delete from products where pid = '$pid'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
  echo "fine";
  if (mysqli_affected_rows($conn) > 0) {

            $response["submit"]=1;
            $response["message"]="deleted";
            echo json_encode($response);



}
else {
$response["submit"]=0;
$response["message"]="no result found";
echo json_encode($response);
}

}



  }
  else {
  $response["submit"]=0;
  $response["message"]="mising entries";
  echo json_encode($response);
  }



 ?>
