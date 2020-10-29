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
<?php
$pdo=new PDO('mysql:host=localhost;dbname=finder','root','');
$sql='select * from products where id=:id';
$stm=$pdo->prepare($sql);
$stm->execute(array(':id'=>$_GET['id']));

while($res=$stm->fetch(PDO::FETCH_ASSOC))
{ 
    $productimg=$res['product_image'];
    $productname=$res['product_name'];
    $productfeatures=$res['product_features'];
    $productpriceamazon=$res['product_price_amazon'];
    $productpriceflipkart=$res['product_price_flipkart'];
    $productlinkamazon=$res['product_amazon_link'];
    $productlinkflipkart=$res['product_flipkart_link'];
    $productram=$res['product_ram'];
    $productcamera=$res['product_camera'];
    $productbattery=$res['product_battery'];
    $productprocessor=$res['product_processor'];
    $productsize=$res['product_size'];
    $a= "
    <section id=\"subpage-header\">
    <div class=\"subpage-topnav\" id=\"myTopnav1\">
        <h3 class=\"header-logo-text\">FINDER</h3>
        <a href=\"#\">About</a>
        <a href=\"#contact\">Login</a>
        <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction1()\">
            <i class=\"fa fa-bars\"></i>
        </a>
    </div>
</section> 
<h1 class=\"phone-title\">$productname</h1>
<hr style=\"background-color:  black;\">
<section id=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row t text-sm-center\">
            <div class=\"col-md-6 col-sm-12 text-md-center\" style=\"margin-top: -2%;\" >
                <img src=\"$productimg\">
            </div>
            <div class=\"col-md-6 col-sm-12 text-md-left\" style=\"margin-top: 4%;\">
               
                   <ul>
                       <li>
                          <h5 class=\"phone-features-head\">Description:</h5>  
                          <p>$productfeatures
                          </p>
                        </li>
                        <li>
                            <h5 class=\"phone-features-head\">Camera:</h5>  
                            <p>$productcamera
                            </p>
                          </li>
                          <li>
                            <h5 class=\"phone-features-head\">Battery:</h5>  
                            <p>$productbattery
                            </p>
                          </li>
                          <li>
                            <h5 class=\"phone-features-head\">Processor:</h5>  
                            <p>$productprocessor
                            </p>
                          </li>
                          <li>
                            <h5 class=\"phone-features-head\">Memory:</h5>  
                            <p>$productsize
                            </p>
                          </li>
                          <li>
                            <h5 class=\"phone-features-head\">RAM:</h5>  
                            <p>$productram
                            </p>
                          </li>
                        
                   </ul>
               
            </div>
        </div>
    </div>
</section>
<section>
    <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Site</th>
            <th scope=\"col\">Price</th>
            <th scope=\"col\">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Amazon</td>
            <td>$productpriceamazon</td>
            <td><a href=\"$productlinkamazon\" class=\"btn btn-warning\"> Amazon <i class=\"fas fa-shopping-cart\"></i></a></td>
          </tr>
          <tr>
            <td>Flipkart</td>
            <td>$productpriceflipkart</td>
            <td><a href=\"$productlinkflipkart\" class=\"btn btn-primary\"> Flipkart <class class=\"fas fa-shopping-cart\"></class> </a></td>
          </tr>
         
        </tbody>
      </table>
</section>


<div class=\"footer\">
    <div class=\"footer-card\">
        <h3 class=\"footer-logo-text\">FINDER</h3>
        <hr>
        <div class=\"social-links\">
            <h3> Follow Us</h3>
            <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>

            <div class=\"subs-cont\">
                <input type=\"text\" placeholder=\"NAME\" class=\"name-field\">
                <input type=\"email\" placeholder=\"EMAIL\" class=\"email-field\">
                <a href=\"#\" class=\"subscribe-btn\">SUBSCRIBE</a>
            </div>
        </div>

    </div>

</div>
";
echo $a;
};

?>