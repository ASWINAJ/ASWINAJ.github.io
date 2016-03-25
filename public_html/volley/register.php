 <?php
  
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
require_once('conn.php');

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];

echo $username;
echo $password;
echo $email;
  	
 $sql = "INSERT INTO mydb (email,username,password) VALUES ('$email','$username','$password')";
 
 
 if(mysqli_query($con,$sql))
 echo "Successfully Registered";
 else
 echo "Could not register";
}

?>
