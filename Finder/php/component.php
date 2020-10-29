<?php
function component ($productname,$productimg,$productid){
    $elements = "
     <div class=\"col-md-4 col-sm-12 my-3\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"image1\" class= \"img-fluid card-img-top\">

                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                         

                            <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">View Product <i class=\"fa fa-shopping-cart\"></i></button>
                            <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>


                </form>
            </div>
    
    ";
    echo $elements;
}

?>
