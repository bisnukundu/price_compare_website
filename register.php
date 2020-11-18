<?php
require_once('template/header.php');
require_once('config/functions.php');
$register = new Main_Functions();
if (isset($_REQUEST["register_btn"])) {
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
     $register->Create_users($name,$username,$password,$email,"login.php");
}


?>

<body class="">
    <div class="wrapper ">
        <div class="main-panel">
            <!-- Navbar -->
            <?php require_once('template/navbar.php'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <form method="POST">
                        <div class="form-group">
                            <input required type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UserName">
                        </div>
                        <div class="form-group">
                            <input required type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input required type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>


                        <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                    </form>
                    <?php 
                        echo $register->show_msg();
                    ?>
                </div>
            </div>

        </div>
    </div>

    <?php require_once("template/all_js.php"); ?>
</body>

</html>