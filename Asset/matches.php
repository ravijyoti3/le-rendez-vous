<?php
session_start();
include'database.php';
$query=mysql_query("SELECT * from poll ");
$n=mysql_num_rows($query);


 ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Single Respoonsive Layout</title>
    <link href="ftb.css" type="text/css" media="all" rel="Stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu|Dosis" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>

  <body>
    <?php
    include'nav.php';
    $query=mysql_query("SELECT * from poll ");
    $query1=mysql_query("SELECT * from poll ORDER BY team DESC ");

     ?>
  <br><hr /><br>
  <?php
  $n=mysql_num_rows($query);
  while($n--){
 ?>
    <center><div class="w_head"  style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;"><h1><?php if($n%2!=0){$d=strtotime(" $n Months");
    echo date("Y-m-d, l", $d);} ?></h1></div><br>
    <center><div class="card-deck" style="width:60%;display:flex;color:whitesmoke;">
    <a href="team.php?a=<?php $row=mysql_fetch_assoc($query); echo $row['team'];?>"><div class="card" style="background-color:rgba(0, 10, 25,0.3);width:300px;" >
      <?php

      $pic=$row['pic'];
      $id=$row['id']; ?>
    <?php echo "<img src='profile/$id/images/$pic' class='card-img-top' style='height:100px;width:100px;'>"?>
     <div class="card-body">
        <h5 class="card-title"><?php echo $row['team']; ?></h5>
      </div>
    </div></a>
    <h1 class="vs"  style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;"><?php if($n%2==0){echo "7:00";}else{echo "3:00";} ?></h1>
    <a href="team.php?a=<?php $row=mysql_fetch_assoc($query1); echo $row['team'];?>"><div class="card" style="background-color:rgba(0, 10, 25,0.3);width:300px;" >
      <?php
      $pic=$row['pic'];
      $id=$row['id']; ?>
    <?php echo "<img src='profile/$id/images/$pic'class='card-img-top' style='height:100px;width:100px;'>"?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['team']; ?></h5>
      </div>
    </div></a>
  </div>
  </center><br><br>
<?php } ?>
<div class="footer">

</nav>
<center><p id="mini">Accessible version  Privacy  Terms and Conditions  Cookie policy
<br>© 1998-2019 UEFA. All rights reserved.<br />

The UEFA word, the UEFA logo and all marks related to UEFA competitions, are protected by trademarks and/or copyright of UEFA.<br /> No use for commercial purposes may be made of such trademarks.<br /> Use of UEFA.com signifies your agreement to the Terms and Conditions and Privacy Policy.</center>
</p></div>
  </body>
</html>
