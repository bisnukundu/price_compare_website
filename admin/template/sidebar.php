<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo"><a href="" class="simple-text logo-normal">
            <?php echo $_SESSION["user_name"]; ?>
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="./dashboard.php">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <?php
            if ($_SESSION["user_role"] == 0) { ?>


                <li class="nav-item ">
                    <a class="nav-link" href="add_user.php">
                        <i class="material-icons">person</i>
                        <p>Add User</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="addBanar.php">
                        <i class="material-icons">content_paste</i>
                        <p>Add Banar</p>
                    </a>
                </li>
            <?php  };
            ?>
            <?php
            if ($_SESSION["user_role"] != 0) { ?>
                <li class="nav-item ">
                    <a class="nav-link" href="addProduct.php">
                        <i class="material-icons">add</i>
                        <p>Add Product</p>
                    </a>
                </li>
            <?php  };
            ?>
            <li class="nav-item active-pro ">
                <a class="nav-link" href="logout.php">
                    <i class="material-icons">unarchive</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>