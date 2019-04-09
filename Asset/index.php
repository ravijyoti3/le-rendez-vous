<?php
session_start();
error_reporting(0);
include'nav.php';
include'database.php';
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Single Respoonsive Layout</title>

    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>

  <body>

     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img src="S/banner.jpg " class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="S/banner2.png" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="S/banner1.png" class="d-block w-100" alt="...">
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>


<br /><br />
<hr />
<br>

<br><hr /><br>
<?php
$query=mysql_query("SELECT * from poll ");
$query1=mysql_query("SELECT * from poll ORDER BY team DESC ");

$n=2;
while($n--){
?>
<center><div class="w_head"  style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;"><h1><?php if($n%2!=0){$d=strtotime(" $n Months");
echo date("Y-m-d, l", $d);} ?></h1></div><br>
<center><div class="card-deck" style="width:60%;display:flex;color:whitesmoke;">
<div class="card" style="background-color:rgba(0, 10, 25,0.3);width:200px;" >
  <?php
  $row=mysql_fetch_assoc($query);
  $pic=$row['pic'];
  $id=$row['id']; ?>
<?php echo "<img src='profile/$id/images/$pic'class='card-img-top' style='height:100px;width:100px;'>"?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['team']; ?></h5>
  </div>
</div>
<h1 class="vs"  style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;"><?php if($n%2==0){echo "7:00";}else{echo "3:00";} ?></h1>
<div class="card" style="background-color:rgba(0, 10, 25,0.3);" >
  <?php
  $row=mysql_fetch_assoc($query1);
  $pic=$row['pic'];
  $id=$row['id']; ?>
<?php echo "<img src='profile/$id/images/$pic'class='card-img-top' style='height:100px;width:100px;'>"?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['team']; ?></h5>
  </div>
</div>
</div>
</center><br><br>
<?php } ?>
<br />
<hr />
<br>
<div style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;"><h1>Star Talks</h1></div>
<br><br>
<center><div class="card-deck" style="width:95%;display:flex;color:whitesmoke;">
  <div class="card" style="background-color:rgba(0, 10, 25,0.3);">
    <img src="S/pele.jpg" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">Pele</h5>
      <p class="card-text">Success is no accident. It is hard work, perseverance, learning, studying, sacrifice.</p>
    </div>
  </div>
  <div class="card" style="background-color:rgba(0, 10, 25,0.3);" >
    <img src="S/ronaldo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Christiano Ronaldo</h5>
      <p class="card-text">Winning - that's the most important to me. It's as simple as that.</p>
    </div>
  </div>
  <div class="card" style="background-color:rgba(0, 10, 25,0.3);">
    <img src="S/messi.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lionel Messi</h5>
      <p class="card-text">Goals are only important if they win games</p>
    </div>
  </div>  <div class="card" style="background-color:rgba(0, 10, 25,0.3);">
      <img src="S/ronaldino.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ronaldino</h5>
        <p class="card-text">Goals are only important if they win game</p>
      </div>
    </div>
    <div class="card" style="background-color:rgba(0, 10, 25,0.3);">
       <img src="S/neymar.jpg" class="card-img-top" alt="...">
       <div class="card-body">
         <h5 class="card-title">Ronaldino</h5>
         <p class="card-text">Goals are only important if they win games</p>
       </div>
     </div>
</div>
</center>
<br />
<hr />
<br>
<div style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;">
  <h1>News</h1>
</div><br><br>
<center><div class="card-columns" style="width:95%;">
  <div class="card" >
    <img src="S/n1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tottenham v Manchester City: previous all-English ties</h5>
      <p class="card-text">Tottenham Hotspur will host the first European game in their new stadium on 9 April and visitors Manchester City will also be hoping.</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Juventus v Ajax: Their previous Champions League meetings</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Source <cite title="Source Title">UEFA</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img src="S/n2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">The 2019/20 Champions League group stage as it stands
</h5>
      <p class="card-text">Twenty-six teams qualify automatically for the group stage of the 2019/20 UEFA Champions League.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Eight teams and seven different clubs have claimed 'the treble' over the years, winning the European Cup, league title and biggest domestic cup in the same campaign:</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Champions League 100 club: Philipp Lahm</h5>
      <p class="card-text">A 2013 winner with Bayern, Philipp Lahm is the latest UEFA Champions League centurion under the spotlight.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="S/n3.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Which Champions League teams are still on for the treble?
</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
        Source<cite title="Source Title">UEFA</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Records Ronaldo and Messi have not broken (yet)</h5>
      <p class="card-text">Cristiano Ronaldo has snaffled up a scoring record, but he and Lionel Messi still have few more targets to aim for.

</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<br />
<hr />
<br>
<?php include'pollt.php'; ?>
</center>

<div class="footer">

</nav>

<center><p id="mini">Accessible version  Privacy  Terms and Conditions  Cookie policy
<br>© 1998-2019 UEFA. All rights reserved.<br />

The UEFA word, the UEFA logo and all marks related to UEFA competitions, are protected by trademarks and/or copyright of UEFA.<br /> No use for commercial purposes may be made of such trademarks.<br /> Use of UEFA.com signifies your agreement to the Terms and Conditions and Privacy Policy.</center>
</p></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js">

</script>
  </body>
</html>
