<?php

session_start();
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
<html >
  <head>
    <meta charset="UTF-8">
    <title>Single Respoonsive Layout</title>
    <link href="ftb.css" type="text/css" media="all" rel="Stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu" rel="stylesheet">


  </head>

  <body>

    <nav class="a">
     <div class="logo">
       <h4><i class="material-icons">ac_unit</i> FOOTBALL</h4>
     </div>
      <ul class="nav-items">
        <li ><a href="ftb.html">Home</a></li>
        <li><a href="matches.html">Schedule</a></li>
        <li><a href="a">Follow</a></li>
        <li><a href="u/tableclub.html">Stats</a></li>
        <li><a href="a">Poll</a></li>

      </ul>
    </nav>

<center><div class="form">
  <p>REGESTER HERE!</p>
  <br />
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >

    Name <br>
    <input type="text" name="name" placeholder="Enter Your Name">
    <br>
    Email<br>
    <input type="text" name="email" placeholder="Enter Your Email" required value=""><br />
    Password <br>
    <input type="password" name="password" placeholder="Enter Password"   ><br>
    Confirm Password <br>
    <input type="password" name="cpassword" placeholder="Enter Password"   ><br>
  <input type="submit" name="submit" value="Submit" id="butn">
  <input type="reset" name="reset" id="butn">


  </form>
</div>
</center>
<div class="footer">
 <nav class="a">
   <ul class="nav-items1">
     <li ><a href="ftb.html"  ><b>HOME</b></a></li>
     <li><a href="matches.html"><b>SCHEDULE</b></a></li>
     <li><a href="a" ><b>FOLLOW</b></a></li>
     <li><a href="u/tableclub.html"><b>Stats</b></a></li>
     <li><a href="a"><b>POLL</b></a></li>   </ul>
</nav>

<center><p id="mini">Accessible version  Privacy  Terms and Conditions  Cookie policy
<br>© 1998-2019 UEFA. All rights reserved.<br />

The UEFA word, the UEFA logo and all marks related to UEFA competitions, are protected by trademarks and/or copyright of UEFA.<br /> No use for commercial purposes may be made of such trademarks.<br /> Use of UEFA.com signifies your agreement to the Terms and Conditions and Privacy Policy.</center>
</p></div>
  </body>
</html>
