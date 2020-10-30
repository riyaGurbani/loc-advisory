<?php 
include("config1.php")    
 if(isset($_POST["submit"]))
 {
mysql_connect("localhost","root","");
 mysql_select_db("location");
     $name = $_post['name'];
  $email = $_post['email'];
  $dob = $_post['dob'];
  $phone = $_post['phone'];
  $pwd = $_post['pass'];
  $cpwd = $_post['cpass'];
  $sql = "INSERT INTO registration (name,email,dob,phone,pwd,confirm_pwd) VALUES ('$name','$email','$dob','$phone','$pass','$cpass')";
  if(!mysqli_query($con,$sql))
  {
  echo 'Not Able to Register'
  }
  else
  {
  echo 'Registered!';
  }
  header("refresh:2" url=index.html")
  }
  ?>
  
  
