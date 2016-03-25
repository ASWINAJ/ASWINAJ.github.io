 <?php

  if($_SERVER['REQUEST_METHOD']=='POST')
  {
require_once('conn.php');

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];


$sql1 = "select * from mydata where email = '$email'";
$result = mysqli_query($con,$sql1);

if(mysqli_num_rows($result) > 0)
echo "Already exixts";
else{
$sql = "INSERT INTO mydata (email,username,password) VALUES ('$email','$username','$password')";

 if(mysqli_query($con,$sql))
 echo "Successfully Registered";
 else
 echo "Could not register";
}
}
else {
  echo "error";
}


?>
