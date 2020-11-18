<?php
require_once('template/header.php');
require_once('config/functions.php');

// $add_product = new Main_Functions();
$edit_ = new Main_Functions();
$update_ = new Main_Functions();
$tablee;
if ($_SESSION["user_role"] == 1) {
    $tablee = "tesco";
} elseif ($_SESSION["user_role"] == 2) {
    $tablee = "heromarket";
} elseif ($_SESSION["user_role"] == 3) {
    $tablee = "giantmall";
}
$edit_data = $edit_->edit_product($_REQUEST["id"], $tablee);


if (isset($_REQUEST["product_update_btn"])) {
    $product_price = $_REQUEST['product_price'];
    $product_name = $_REQUEST['product_name'];
    $product_img = $_FILES['product_img'];
    $product_id = $_REQUEST["product_id"];
    $table;
    if ($_SESSION["user_role"] == 1) {
        $table = "tesco";
    } elseif ($_SESSION["user_role"] == 2) {
        $table = "heromarket";
    } elseif ($_SESSION["user_role"] == 3) {
        $table = "giantmall";
    }
    move_uploaded_file($product_img["tmp_name"], "assets/product/" . time() . $product_img['name']);
    $update_->update_product($table, $product_id, $product_name, $product_price, time() . $product_img["name"]);

    header("Location:dashboard.php");
}


?>

<body class="">
    <div class="wrapper ">
        <?php require_once('template/sidebar.php'); ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php require_once('template/navbar.php'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Add Product</h4>
                                    <p class="card-category">Complete your profile</p>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Product Name</label>
                                                    <input type="hidden" value="<?php echo $edit_data['id']; ?>" name="product_id">
                                                    <input required value="<?php echo $edit_data['title']; ?>" type="text" name="product_name" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Product Price</label>
                                                    <input required value="<?php echo $edit_data['price']; ?>" type="text" name="product_price" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">



                                            <div class="col-md-12">
                                                <div class="input-group my-4">
                                                    <div class="input-group-prepend" style=" margin-right: -50px;">
                                                        <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                                    </div>

                                                    <div class="input-group my-4">
                                                        <div class="input-group-prepend" style=" margin-right: -50px;">
                                                            <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                                        </div>

                                                        <div class="fileUpload">

                                                            <input required id="uploadBtn1" value="<?php echo $edit_data['img']; ?>" type="file" class="upload form-control" name="product_img" />
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <button name="product_update_btn" type="submit" class="btn text-center mx-auto btn-primary">Add Product</button>
                                    </form>
                                    <?php
                                    if ($update_->show_msg()) { ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <?php echo $update_->show_msg();  ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php require_once("template/all_js.php"); ?>
</body>

</html>