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

$response = array();
  if(!empty($_POST['pid']))
  {
  $pid=$_POST['pid'];
  $query = "select * from products where pid = '$pid'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
  echo "fine";
  echo mysqli_num_rows($result);
  if (mysqli_num_rows($result) > 0) {

            $result = mysqli_fetch_array($result);
            $products = array();
            $products["pid"] = $result["pid"];
            $products["name"] = $result["name"];
            $products["price"] = $result["price"];
            $response["submit"]=1;
            $response["products"] = array();
            array_push($response["products"],$products);
            echo json_encode($response);



}
else {
$response["success"]=0;
$response["message"]="no result found";
echo json_encode($response);
}
}



  }
  else {
  $response["success"]=0;
  $response["message"]="mising entries";
  echo json_encode($response)''
  }



 ?>
