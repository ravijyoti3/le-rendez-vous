<?php
session_start();
include'nav.php';
include'database.php';
if (isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  if ($password=$cpassword) {
    $query=mysql_query("SELECT email from form where email='$email' ");
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT into form(email,password,name) VALUES('$email','$password','$name')");
     if($q)
     {
      echo "success";
     }
     else
     {
       echo "fail";
     }
    }
    else
    {
      echo "email already exist!";
    }
  }
 else {
   echo "password doesn't match!";
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
    <div class="card" style="color:whitesmoke;width: 18rem;position:fixed;top:30%;left:40%;background-color:rgba(0, 10, 25,0.3)">
  <div class="card-body">
    <h5 class="card-title">Sign Up Here!</h5><br>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <h6 class="card-subtitle mb-2 text-muted">
      Name</h6>
      <input type="text" name="name" placeholder="Enter Your Name">
      <br><br>
       <h6 class="card-subtitle mb-2 text-muted">Email</h6>
      <input type="text" name="email" placeholder="Enter Your Email" required value=""><br>
       <br>
       <h6 class="card-subtitle mb-2 text-muted">Password</h6>
      <input type="password" name="password" placeholder="Enter Password"   ><br>
       <br>
      <h6 class="card-subtitle mb-2 text-muted">Confirm Password</h6>
      <input type="password" name="cpassword" placeholder="Enter Password"   ><br>
      <br>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
      <input type="reset" name="reset" value="Reset" class="btn btn-primary" >

    </form>
    <br>
    <a href="fpass.php" class="card-link"><u>Forgot Password!</u></a><br>
    <a href="sign.php" class="card-link"><u >Already Have Account!</u></a>
  </div>
</div>
  </body>
</html>
