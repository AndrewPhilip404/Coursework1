<!DOCTYPE html>
<html>
<head>
	<title>Tasty Tower</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="navigation.css" media="all">
	<script src="script.js"></script>
</head>

<nav>
  <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="#">Creators</a></li>
      <li><a href="scenario.html">Scenario</a></li>
  </ul>
</nav>
<style>
  body {
    background-image: url('https://image.freepik.com/free-photo/wooden-planks-with-blurred-restaurant-background_1253-56.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  </style>

 <div class="header">
   <h1 class="logo">Tasty </br> Tower </h1>
   

   <div class="burger">
    <img src="burger.png" align = "center" width = 440px height = 280px>
   </div>
<!--play button -->
   <div class="playbtn">
<img src="play_button.png" onclick="document.getElementById('id01').style.display='block'" alt="play" align = "center" width = 50% height = 50%>
     <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close ">&times;</span>
 <div class="one1">
   <div class="form-box">
    <div class="button-box">
      <div id="btn"></div><!--for login and registering  -->
      <button type="button" class="toggle-btn" onclick="login()">Log In</button>
      <button type="button" class="toggle-btn" onclick="register()">Register</button>
    </div>
     <form id="login1" class="input-group" action ="index.php" method ="post">
       <input type="text" class="input-field" placeholder="User Id"  name = "name"required>
       <input type="password" class="input-field"  placeholder="Password" name = "password" required>
       <button type="submit" class="submit-btn1" name = "signup" value = "signup">Log in</button>
     </form>
     <form id="register" class="input-group" action ="register.php" method = "post">
       <input type="text" class="input-field" placeholder="User Id" name = "name" required>
       <input type="password" class="input-field" placeholder="Password" name = "password" required>
       <button type="submit" class="submit-btn2" name = "signup" value = "signup" >Register</button>
     </form>
   </div>
 </div>
</div>
    </div>
 </div>
 <script>
 	   var x= document.getElementById("login1");
   var y= document.getElementById("register");
   var z= document.getElementById("btn");
 

 	function register(){
  x.style.left = "-450px";
  y.style.left = "50px";
  z.style.left = "110px";

}

function login(){
  x.style.left = "50px";
  y.style.left = "400px";
  z.style.left = "0";

}

</script>
</body>
</html>

<?php 

$db=mysqli_connect("localhost","root","","sandwich");

if(isset($_POST["signup"]))
{
    $uname =$_POST["name"];
    $pass =$_POST["password"];
    $sql = mysqli_query($db,"select password from log_in where user='$uname'");
    $rm = mysqli_fetch_array($sql);
    if($rm){
        if($pass==$rm['password']){
          $_SESSION["name"] = $uname;
            header("location:GamePage.php");
            exit();
        }
        else{
        echo "Invaild data";
    }
}
    else{
        echo "<script>alert ('username incorrect')</script>";
    }
}
?>
