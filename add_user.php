<?php
require_once('template/header.php');
require_once('config/functions.php');
$add_user = new Main_Functions();
if (isset($_REQUEST["addUser"])) {
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];
    $add_user->Create_users($name, $username, $password, $email, "", $role);
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
                        <div class="col-md-12 mt-5">
                            <form class="form-horizontal" method="post" action="">

                                <div class="form-group pt-3">
                                    <label for="name" class="cols-sm-2 control-label">Your Full Name</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full your Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pt-3 mt-4">
                                    <label for="username" class="cols-sm-2 control-label">Username</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pt-3 mt-4">
                                    <label for="username" class="cols-sm-2 control-label">Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Username" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pt-3 my-4">
                                    <label for="password" class="cols-sm-2 control-label">Password</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 offset-md-3 pb-5 mb-3">
                                    <label for="password" class="cols-sm-2 control-label">ROLE</label>
                                    <div class="role">
                                        <select name="role" id="" class="form-control">
                                            <option value="" selected>SELECT ROLE</option>
                                            <option value="1">Tesco</option>
                                            <option value="2">HeroMarket</option>
                                            <option value="3">Giant Mall</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="addUser">ADD User</button>
                                </div>
                            </form>

                            <?php
                            if ($add_user->show_msg()) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo $add_user->show_msg();  ?>
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