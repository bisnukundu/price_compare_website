<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\"col-md-3 col-lg-2 col-sm-6 my-3 my-md-2\" id=\"$productname\">
                <form action=\"index.php#$productname\" method=\"post\">
                    <div class=\"card shadow \">
                        <div>
                            <img src=\"../project/admin/assets/product/$productimg\" alt=\"Image1\" class=\"img-fluid  card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                                                        <button type=\"submit\" class=\"btn btn-warning my-3 \" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productname'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productname\" method=\"post\" class=\"cart-items m-3\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-6 pl-0\">
                                <img width=\"120px\" src=\"../project/admin/assets/product/$productimg\" alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                              
                                <h5 class=\"pt-2\">RM $productprice/kg</h5>
                                <button type=\"submit\" class=\"btn btn-danger\" name=\"remove\">Remove</button>
                            </div>
                           
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
