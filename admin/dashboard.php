<?php
session_start();
if (!isset($_SESSION["user_role"])) {
  header("Location:login.php");
};

require_once('template/header.php');
require_once('config/functions.php');
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
          <?php
          if (isset($_REQUEST["status"])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php echo $_REQUEST['status'];  ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>

          <?php
          if ($_SESSION["user_role"] == 0) {
            include('template/userlist.php');
            include('template/showBanar.php');
          };
          if ($_SESSION["user_role"] != 0) {
            include('template/productlist.php');
          }
          ?>
        </div>
      </div>

    </div>
  </div>

  <?php require_once("template/all_js.php"); ?>
</body>

</html>