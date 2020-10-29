
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Secrets</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <h3 class="logo-text">FINDER</h3>
    </div>

    <!-- Login Form -->
    <form action="/register.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email" autocomplete="off">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password" autocomplete="off">
      <input type="submit" class="fadeIn fourth" name="submit" value="Register">
    </form>

    <!-- Remind Passowrd -->
   

  </div>
</div>
  

      
  
    </div>
  </div>

</body>
</html>
<?php  
echo "<pre>\n";
$pdo = new PDO('mysql:host=localhost;dbname=finder','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['email']) && isset($_POST['pass'])){
    $sql = "INSERT INTO users(email,password) values(:email,:pass)";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute(array(
        ':email' => $_POST['email'],
        ':pass' => $_POST['pass']
    ));
}
?>