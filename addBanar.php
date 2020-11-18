<?php require_once('template/header.php');  ?>
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
                            <div class="alert alert-info alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                            </div>
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

                                                    <input id="uploadBtn1" type="file" class="upload form-control" name="product_img" />
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

                                                    <input id="uploadBtn1" type="file" class="upload form-control" name="product_img" />
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

                                                    <input id="uploadBtn1" type="file" class="upload form-control" name="product_img" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group my-4">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="add_offer">ADD OFFER</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <?php require_once("template/all_js.php"); ?>
</body>

</html>