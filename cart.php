<?php

session_start();
require_once('./admin/config/functions.php');
require_once("php/component.php");
$db = new Main_Functions();


if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                // echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}


?>

<body class="bg-light">

    <?php
    require_once('header.php');
    ?>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-4">
                <div class="shopping-cart">
                    <h3>Giantmall</h3>
                    <hr>

                    <?php
                    // echo "<pre>";
                    // print_r($_SESSION["cart"]);
                    // echo "</pre>";
                    $total1 = [];
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->show_data("giantmall");
                        foreach ($result as $row) {
                            foreach ($product_id as $id) {
                                if ($row['title'] == $id) {
                                    cartElement($row['img'], $row['title'], $row['price'], $row['id']);
                                    array_push($total1, $row['price']);
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <!-- market 2   -->
            <div class="col-md-4">
                <div class="shopping-cart">
                    <h3>Tesco</h3>
                    <hr>

                    <?php

                    $total2 = [];
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $result = $db->show_data("giantmall");
                        $result2 = $db->show_data("tesco");

                        $cart_title = [];
                        foreach ($result as $row) {
                            foreach ($product_id as $id) {
                                if ($row['title'] == $id) {
                                    array_push($cart_title, $row["title"]);
                                }
                            }
                        }
                        foreach ($result2 as $row2) {
                            foreach ($cart_title as $title) {
                                if ($row2["title"] == $title) {
                                    cartElement($row2['img'], $row2['title'], $row2['price'], $row2['id']);
                                    array_push($total2, $row2['price']);
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <!-- market 3  -->
            <div class="col-md-4">
                <div class="shopping-cart">
                    <h3>Heromarket</h3>
                    <hr>

                    <?php

                    $total3 = [];

                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $result = $db->show_data("giantmall");
                        $result2 = $db->show_data("heromarket");
                        $cart_title = [];

                        foreach ($result as $row) {
                            foreach ($product_id as $id) {
                                if ($row['title'] == $id) {
                                    array_push($cart_title, $row["title"]);
                                }
                            }
                        }
                        foreach ($result2 as $row2) {
                            foreach ($cart_title as $title) {
                                if ($row2["title"] == $title) {
                                    cartElement($row2['img'], $row2['title'], $row2['price'], $row2['id']);
                                    array_push($total3, $row2['price']);
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }
                    ?>

                </div>
            </div>

        </div>
        <!-- Total price table -->
        <div class="row px-3">
            <div class="col-md-4 my-3 border rounded bg-white h-25">

                <div class="pt-4">
                    <h3>PRICE DETAILS Giantmall</h3>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <h5>Total Price</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>RM <?php echo array_sum($total1); ?></h5>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-3 lmarket1">

                    </div>
                </div>

            </div>
            <div class="col-md-4 my-3 border rounded bg-white h-25">

                <div class="pt-4">
                    <h3>PRICE DETAILS Tesco</h3>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">

                            <h5>Total Price</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>RM <?php echo array_sum($total2); ?></h5>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-3 lmarket2">

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 my-3 border rounded bg-white h-25">

                <div class="pt-4">
                    <h3>PRICE DETAILS Heromarket</h3>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <h5>Total Price</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>RM <?php echo array_sum($total3); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-3 lmarket3">

                    </div>
                </div>

            </div>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        // Location 
        window.onload = function() {

            function Location(nam, posi) {
                var nam = nam;
                var posi = posi;

                function success(position) {
                    var bb = document.createElement("a");
                    bb.innerText = "Distance";
                    bb.target = "blank";
                    bb.className = "btnOurFoot btn btn-info mb-3";
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    bb.href = `https://www.google.com/maps/dir/${latitude},${longitude}/${nam}`;
                    document.querySelector(posi).append(bb)
                }

                function error() {
                    console.log('Unable to retrieve your location');
                }
                var options = {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 0
                };

                // LOCATION GET CODE  END
                navigator.geolocation.getCurrentPosition(success, error, options);
            }
            // // AEON BIG MARKET
            Location("Tesco Paradigm Mall", ".lmarket2")
            // // HERO MARKET 
            Location("HeroMarket 47301 Petaling Jaya, Selangor, Malaysia", ".lmarket3 ")
            // GIANT MARKET 
            Location("Giant Hypermarket Kelana Jaya No 33 Jalan Ss6", ".lmarket1")



        }
    </script>
</body>

</html>