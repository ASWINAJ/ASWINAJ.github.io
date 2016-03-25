<?php
require_once('conn.php');
$response = array();

$query = "select * from mydb";
$res = mysqli_query($con,$query);
if($res)
{
$response["users"]=array();
while($row=mysqli_fetch_assoc($res))
{
  $product = array();
  $product["id"]=$row["id"];
  $product["username"]=$row["username"];
  $product["password"]=$row["password"];
  array_push($response["users"],$product);

}

echo json_encode($response);
}
else {
  $response["submit"]=0;
  $response["message"]="Failed";
  echo json_encode($response);
}



 ?>
