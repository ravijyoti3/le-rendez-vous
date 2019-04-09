<?php
session_start();
include'database.php';
include'nav.php';
if(isset($_POST['submit'])){
  $email=$_POST['email'];

  $query=mysql_query("SELECT * from form where email='$email'");
  $n=mysql_num_rows($query);
  if($n>0){

    $_SESSION['email']=$email;
    header("location:rpass.php");
    echo "Success";
  }
  else {
    echo "Plese Check Email Address!";
  }}
  ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <title></title>
   </head>
   <body>
     <center>
     <div class="card" style="color:whitesmoke;background-color:rgba(0, 10, 25,0.3);width: 18rem;">
  <div class="card-body" >
    <h5 class="card-title">Forgot Password!</h5>
    <p  class="card-subtitle mb-2 text-muted">Enter Your Email Id!</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
    <input type="text" name="email" >
    <br><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
    <p class="card-text"><small class="text-muted">A Conformation link will be sent.</small></p>
  </div>
</div></center>
   </body>
 </html>
