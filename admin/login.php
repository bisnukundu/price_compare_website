<?php
require_once('template/header.php');
require_once('config/functions.php');
session_start();
if (isset($_SESSION["user_role"])) {
    header("Location:dashboard.php");
};

$login = new Main_Functions();
if (isset($_REQUEST["login_btn"])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
    $login->Login($email, $password);
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
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                        <a href="register.php" class="btn btn-danger">Register</a>
                        <a href="../index.php" class="btn btn-info">Back To Home</a>
                    </form>
                    <?php
                    echo $login->show_msg();
                    ?>

                </div>
            </div>

        </div>
    </div>

    <?php require_once("template/all_js.php"); ?>
</body>

</html>