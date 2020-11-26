
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="register" class="input-group" action ="" method = "post">
       <input type="text" class="input-field" placeholder="User Id" name = "name" required>
       <input type="password" class="input-field" placeholder="Password" name = "password" required>
       <button type="submit" class="submit-btn2" name = "signup" value = "signup">Register</button>
     </form>
</body>
</html>



<?php 

session_start();

if(isset($_POST['name'])){
	header('localhost:GamePage.php');
	}
$db=mysqli_connect("localhost","root","","sandwich") or die (mysql_error());

if(isset($_POST['signup']))
{
   $name = $_POST['name'];
   $password = $_POST['password'];
   $query = "INSERT INTO log_in(user,password) VALUES ('$name','$password')";
   $sql=mysqli_query($db,"select password from log_in where user='$name'");
   if($name==''){
      echo "<script>alert ('please enter the user name')</script>";
      exit();
      }
   if($password=='') {
      echo "<script>alert ('please enter the password')</script>";
      exit();
      }
else{
   if(mysqli_query($db,$query)){
     header("location:login.php");
   }
}
}
?>