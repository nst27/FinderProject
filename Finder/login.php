<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/loginstyle.css">
</head>
<?php
      session_start();
      if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $pdo=new PDO('mysql:host=localhost;dbname=userdet','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql=$pdo->prepare('select * from users where email=:email and password=:pass');
$sql->execute(array(':email'=>$email, ':pass'=>$pass));
$count=$sql->rowCount();
if($count===0)
{
  echo "LOGIN UNSUCCESSFUL";
}
else{
    header("location:index.html");
    exit();
}
            }
      


      ?>    
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <h3 class="logo-text">FINDER</h3>
    </div>

    <!-- Login Form -->
    <form method="POST" action="login.php">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email" autocomplete="off">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password" autocomplete="off">
      <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
    </form>

    <!-- Remind Passowrd -->
   

  </div>
</div>
