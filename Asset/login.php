<?php
session_start();
include'database.php';
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query=mysql_query("SELECT*from form where email='$email' ");
  $n=mysql_num_rows($query);
  if($n==1)
  {
    $row=mysql_fetch_assoc($query);
    if ($password==$row['password'])
    {
      //  echo "success!";
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

<html>
	<head>
		<title>Animation Basics</title>
		<link rel="stylesheet" href="ftb.css" media="all" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Quicksand|Righteous" rel="stylesheet">



	</head>
	<body>
<div class="headg">
	<h3> <h4><i class="material-icons">ac_unit</i>LE-RENDEVOUZ</h4></h3>
</div>
<br><br>

<div class="para">
  Welcome to Le-Rendevouz<br>
  Log In To Your Account to stay update about your team in UEFA!</div>
<br><br><br>
<center><div class="form">
  <p id="formh">Login Here!</p>
  <br>
  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Email<br>
		<input type="text" name="email" placeholder="Enter Email">
		<br><br>
		Password<br>
    <input type="password" name="password" placeholder="Enter Password">
    <br><br>
		<input type="submit" name="submit" value="Submit" class="fbutn">
		<input type="reset" name="reset" value="Reset" class="fbutn">

  </form>
</div></center>

<br>
	</body>
</html>
