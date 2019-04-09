<?php
session_start();
include'database.php';

if (isset($_POST['submit']))
  {
$email=$_SESSION['email'];
$radioVal = $_POST['poll'];

if($radioVal)
{
 $query1=mysql_query("SELECT * from poll where id='$radioVal'");
 $row=mysql_fetch_assoc($query1);
 $vote=$row['vote'];
 $team=$row['team'];
 $query3=mysql_query("SELECT * from form where email='$email'");
 $row1=mysql_fetch_assoc($query3);
 $team1=$row1['team'];
 echo $team1;
 $query4=mysql_query("SELECT * from poll where team='$team1'");
 $row2=mysql_fetch_assoc($query4);
 $vote1=$row2['vote'];
 $vote1=$vote1-1;
 $query5=mysql_query("UPDATE poll set vote='$vote1' where team='$team1'");
 $query2=mysql_query("UPDATE form set team='$team' where email='$email'");
 $vote=$vote+1;
 $query=mysql_query("UPDATE poll set vote='$vote' where id='$radioVal'");
}

else {
  echo "Please Select an Option!";
}
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="ftb.css" type="text/css" media="all" rel="Stylesheet"/>

   </head>
   <body>

      <h1 style="font-family: 'Open Sans Condensed', sans-serif;color:whitesmoke;">Votes Stats!</h1>
    <br><br>
    <div class="p_result">
      <table class="table" cellspacing="20">
        <tr><th ></th>
          <th>Team</th>
        <th>Votes</th></tr>
        <?php
        include'database.php';

          $query=mysql_query("SELECT * from poll");
          $n=mysql_num_rows($query);
          if($n>0)
          {
                    while($row = mysql_fetch_assoc($query))
            {
              $id=$row['id'];
              $pic=$row['pic'];

          ?>
              <tr class="tr" ><td ><?php echo "<img src='profile/$id/images/$pic' class='img_t'>"?></td><td><?php echo $row['team']?></td><td><?php echo $row['vote']?></td></tr>
          <?php  }


          }

         ?>
       </table>
    </div>
    <script type="text/javascript" src="script.js"></script>
   </body>
 </html>
