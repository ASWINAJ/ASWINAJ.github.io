<?php

require_once("conn.php");
$response = array();

$query = "select * from mydata";
$res = mysqli_query($con,$query);
if($res)
{
$response["users"]=array();
while($row=mysqli_fetch_assoc($res))
{
  $product = array();
  $product["email"]=$row["email"];
  $product["username"]=$row["username"];
  $product["password"]=$row["password"];
  $product["contact"]=$row["contact"];
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
