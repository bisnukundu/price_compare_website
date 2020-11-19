<?php
require_once('template/header.php');
require_once('config/functions.php');
$add_banar_ = new Main_Functions();
if (isset($_REQUEST["banar_add_btn"])) {
    $banar1 = $_FILES['banar1'];
    $banar2 = $_FILES['banar2'];
    $banar3 = $_FILES['banar3'];
    $add_banar_->add_banar(time() . $banar1["name"], time() . $banar2["name"], time() . $banar3["name"]);
    move_uploaded_file($banar1["tmp_name"], "assets/banar/" . time() . $banar1['name']);
    move_uploaded_file($banar2["tmp_name"], "assets/banar/" . time() . $banar2['name']);
    move_uploaded_file($banar3["tmp_name"], "assets/banar/" . time() . $banar3['name']);
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

                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name" class="cols-sm-2 control-label">Tesco SuperMarke</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend" style=" margin-right: -50px;">
                                                <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend" style=" margin-right: -50px;">
                                                    <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                                </div>

                                                <div class="fileUpload">

                                                    <input id="uploadBtn1" type="file" class="upload form-control" name="banar1" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-5">
                                    <div class="col-md-12">
                                        <label for="name" class="cols-sm-2 control-label">Hero SuperMarke</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend" style=" margin-right: -50px;">
                                                <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend" style=" margin-right: -50px;">
                                                    <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                                </div>

                                                <div class="fileUpload">

                                                    <input id="uploadBtn1" type="file" class="upload form-control" name="banar2" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <label for="name" class="cols-sm-2 control-label">Giant SuperMarket </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend" style=" margin-right: -50px;">
                                                <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend" style=" margin-right: -50px;">
                                                    <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                                </div>

                                                <div class="fileUpload">

                                                    <input id="uploadBtn1" type="file" class="upload form-control" name="banar3" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group my-4">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="banar_add_btn">ADD Banar</button>
                                </div>

                            </form>
                            <?php
                            if ($add_banar_->show_msg()) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo $add_banar_->show_msg();  ?>
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

    <?php require_once("template/all_js.php"); ?>
</body>

</html>