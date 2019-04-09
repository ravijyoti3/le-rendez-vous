<?php
session_start();
include'database.php';
include'nav.php';
 if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query=mysql_query("SELECT * from form where email='$email' ");
  $n=mysql_num_rows($query);
  if($n==1)
  {
    $row=mysql_fetch_assoc($query);
    if ($password==$row['password'])
    {
      echo "success!";
                         //header("location:tnext.php");
    header( "refresh:1; url=index.php" );
    $_SESSION['email']=$email;
    $_SESSION['logged']=True;
    }
    else
    {
      echo "failure!";
      $_SESSION['logged']=False;
    }
  }
  else {
    echo "email doesn't Exist!";
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
    <div class="card" style="color:whitesmoke;background-color:rgba(0, 10, 25,0.3);width: 18rem;position:fixed;top:35%;left:40%;">
  <div class="card-body" >
    <h5 class="card-title">Login Here!</h5><br>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <h6 class="card-subtitle mb-2 text-muted">Email</h6>
      <input type="text" name="email" placeholder="Enter Email">
      <br><br>
      <h6 class="card-subtitle mb-2 text-muted">Password</h6>
      <input type="password" name="password" placeholder="Enter Password">
      <br><br>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary">&nbsp;
      <input type="reset" name="reset" value="Reset" class="btn btn-primary">

    </form>
    <br>
    <a href="fpass.php" class="card-link"><u>Forgot Password!</u></a><br>
    <a href="signup.php" class="card-link"><u >Create Account!</u></a>
  </div>
</div>
  </body>
</html>
