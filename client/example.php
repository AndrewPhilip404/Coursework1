<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
<center></head>
<body>

    <h2>Rigister here</h2>
    <form action="example.php" method="post">
    <table border = "1" width = "300" height = "150">
    <tr><td>Name</td> 
     <td><input type="text" name = "name"></td>
     </tr>
     <tr> <td>Password</td>
     <td><input type="password" name = "password"></td>
     </tr>
     <tr> 
     <td colspan ="5" align="center"></td><input type="submit" name = "signup" value="signup"></tr>
    </table>    
     </form>
</body></center>
</html>
<?php 
session_start();
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("data") or die (mysql_error());

if(isset($_POST['signup']))
{
   $name = $_POST['name'];
   $password = $_POST['password'];
   $query = "insert into user(user,password) values ('$name','$password')";
   if(mysql_query($query)){
     echo "<h3> you have registered successfully!!</h3>";
   }
}
?>