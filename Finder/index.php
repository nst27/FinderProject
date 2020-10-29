<?php 

session_start();
require_once("./php/CreateDB.php");
require_once("./php/component.php");

$database = new createDB("localhost","Finder");
if(isset($_POST['submit'])){
    $value=$_POST['product_id'];
   header("Location:desciption.php?id=$value");
   return;
}
?>

<html>

<head>
    <title>E-BUZZ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0afa0c8f76.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <section id="subpage-header">
        <div class="subpage-topnav" id="myTopnav1">
            <h3 class="header-logo-text">FINDER</h3>
            <a href="#">About</a>
            <a href="#contact">Login</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section> 
    <div class="container ">
        <div class="row text-center py-5 ">
            <?php 
                $result = $database->getData();
                while($row=mysqli_fetch_assoc($result)){
                    component($row['product_name'],$row['product_image'],$row['id']);
                }

            ?>

        </div>
    </div>

     <div class="footer gray-gradient">
        <div class="footer-card">
            <h3 class="footer-logo-text">FINDER</h3>
            <hr>
            <div class="social-links">
                <h3> Follow Us</h3>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>

                <div class="subs-cont">
                    <input type="text" placeholder="NAME" class="name-field">
                    <input type="email" placeholder="EMAIL" class="email-field">
                    <a href="#" class="subscribe-btn">SUBSCRIBE</a>
                </div>
            </div>

        </div>

    </div> 




    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
