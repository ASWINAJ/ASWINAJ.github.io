<?php
$hostname = "localhost";
$database = "hive";
$username = "root";
$password = "amma";

$con = mysqli_connect($hostname, $username, $password,$database);
if($con)
echo "conncted\t";
else {
  echo "not connected\t";
}

$response = array();

if(!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['desc']) && !empty($_POST['pid']))
{
  $name = $_POST['name'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  $pid = $_POST['pid'];

  $query = "update products SET name = '$name',price='$price',description='$desc' where pid='$pid'";

  $res=mysqli_query($con,$query);

  if($res){
  $response["submit"]=1;
  $response["message"]="fine updated";
}
  else {
    $response["submit"]=0;
    $response["desc"]="not updated";
  }
  echo json_encode($response);
}
else {
  $response["submit"]=0;
  $response["desc"]="missing entries";
  echo json_encode($response);
}



 ?>
