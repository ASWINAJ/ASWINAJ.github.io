<?php
$response = array();
echo "hello";
$product=array();

$product["name"] = "jolie";
$product["url"] = "http://athena.nitc.ac.in/aswin_b130736cs/Angelina.jpg";


array_push($response, $product);

echo json_encode($response);
?>
