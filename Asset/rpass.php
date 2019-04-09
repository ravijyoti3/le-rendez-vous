<?php
session_start();
include'nav.php';
include'database.php';

if(isset($_POST['submit'])){
$email=$_SESSION['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword){
$query=mysql_query("UPDATE form set value password='$password' where email='$email'");
echo "Succesfully Changed!";
header("location:sign.php");
}
else {
  echo "Both Password Doesn't match!";
}
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   </head>
   <body>
     <center>
     <div class="card" style="color:whitesmoke;background-color:rgba(0, 10, 25,0.3);width: 18rem;">
  <div class="card-body" >
    <h5 class="card-title">Reset Password!</h5>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
    <p  class="card-subtitle mb-2 text-muted">New Password</p>
    <input type="text" name="password" >
    <br><br>
    <p  class="card-subtitle mb-2 text-muted">Confirm Password</p>
    <input type="text" name="cpassword" >
    <br><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
    <p class="card-text"><small class="text-muted">Enter Your New Password.</small></p>
  </div>
</div></center>
   </body>
 </html>
