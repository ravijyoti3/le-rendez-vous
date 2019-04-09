<?php
session_start();
include'database.php';
if (isset($_POST['submit'])) {
  $id=$_POST['email'];
  $goal=$_POST['goal'];
  $attempt=$_POST['attempt'];
  $card=$_POST['card'];
  $pic=$_FILES['upload']['name'];
  $query=mysql_query("SELECT * from poll where id='$id'");

    $temp=$_FILES['upload']['tmp_name'];
   $q=mysql_query("UPDATE poll set Goals='$goal', attempt='$attempt',card='$card', line='$pic' where id='$id'");
   if($q)
   {
    $dir="./profile/$id/images/";
    mkdir($dir,0777,true);
    move_uploaded_file($temp,"./profile/$id/images/$pic");
    echo "<img src='profile/$id/images/$pic'>";
   }
 }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="email" value=""><br>
    goal
      <input type="text" name="goal" value=""><br>
      attempt
        <input type="text" name="attempt" value=""><br>
        card
          <input type="text" name="card" value=""><br>
    <input type="file" name="upload" value=""><br>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
  </body>
</html>
