<?php
session_start();
include ('config.php');
 if(isset($_POST['submit']))
    {
//username and password
 $email=$_POST['email']; 
 $pass=$_POST['pwd']; 
$sql="SELECT * FROM registration WHERE email='$email' && pwd='$pass'";
     
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
            $_SESSION['email']= $email;
        header('location:add.php');
        
    }
    else {
        
         echo '<script>alert("Invalid email or password!")</script>'; 
        
        header('location:admin.php'); 
    }
     
     
    /* $sql_run = mysqli_query($con,$sql);
     if(mysqli_num_rows($sql_run)>0)
     {
         //valid
         $_SESSION['email']= $email;
         header('location:index.php');
            
     }
     else {
         //invalid
         echo '<script type="text/javascript"> alert("Invalid Email or password") </script>';
        // header('location:signin.php');
     }
      header('location:signin.php'); */
 }
?>
 