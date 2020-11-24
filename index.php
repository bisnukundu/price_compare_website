<?php

session_start();
require_once('./admin/config/functions.php');
require_once('./php/component.php');


// create instance of Createdb class
$database = new Main_Functions();

if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id']
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}

require_once("header.php");
require_once("slider.php");
?>


<body>

    <div class="container-fluid text-center mt-4">
        <h3 class="display-1">Products</h3>
        <div class="row text-center py-5">
            <?php
            $check_title = [];
            $result = $database->show_data("giantmall");
            $result2 = $database->show_data("tesco");
            $result3 = $database->show_data("heromarket");

            foreach ($result as $product) {
                component($product['title'], $product['price'], $product['img'], $product['id']);
                array_push($check_title, $product["title"]);
            };

            foreach ($result2 as $product2) {
                if (!in_array($product2["title"], $check_title)) {
                    component($product2['title'], $product2['price'], $product2['img'], $product2['id']);
                    array_push($check_title, $product2["title"]);
                }
            }
            foreach ($result3 as $product3) {
                if (!in_array($product3["title"], $check_title)) {
                    component($product3['title'], $product3['price'], $product3['img'], $product3['id']);
                    array_push($check_title, $product3["title"]);
                }
            }







            ?>
        </div>
       <a href="https://www.messenger.com/t/100007763590397/" target="blank"><img width="60px" class="messenger_icon" src="images/icon/messenger.svg" alt="message"></a>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>