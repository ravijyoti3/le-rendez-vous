<?php
session_start();
include'database.php';
include'nav.php';

$_SESSION['team']=$_GET['a'];
$team=$_SESSION['team'];
$query=mysql_query("SELECT * from poll where team='$team'");
$row=mysql_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="ftb.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <<br><br><br>
   <center><h1><?php echo $row['team']; ?></h1>
   <br><br>
   <div class="card-deck" style="width:50%;display:flex;color:whitesmoke;">
     <div class="card" style="background-color:rgba(0, 10, 25,0.3);width:200px;">
        <?php $id=$row['id'];$pic=$row['pic']; echo "<img src='profile/$id/images/$pic' class='card-img-top' style='height:100px;width:100px;'>" ?>
       <div class="card-body">
         <h5 class="card-title"><?php echo $row['steam']; ?></h5>
       </div>
     </div>
     <div class="card" style="background-color:rgba(0, 10, 25,0.3);width:200px;">
       <div class="card-body">
         <h5 class="card-title">Info</h5>
         <p class="card-text"><?php echo "Country : ".$row['country']."<br>"."Captian : ".$row['captain']; ?> </p>
      </div>
     </div>
   </div>
   <br><br>
   <div class="card-deck" style="width:50%;display:flex;color:whitesmoke;">
     <div class="card" style="background-color:rgba(0, 10, 25,0.3);width:200px;"><br>
        <h5 class="card-title">Team LineUp!</h5><br>
      <?php $id=$row['id'];$pic=$row['line']; echo "<img src='profile/$id/images/$pic' class='card-img-top' style='height:600px;width:600px;'>" ?>
       <div class="card-body">

       </div>
     </div>
   </div>



 </center>
   <br><br>
  </body>
</html>
