<?php
session_start();
require_once('config/functions.php');
$show_users = new Main_Functions();
$table;
if ($_SESSION['user_role'] == 1) {
    $user_delete = $show_users->delete_data($_REQUEST["id"], "tesco");
    $status = $show_users->show_msg();
    header("Location:dashboard.php?status=$status");
} elseif ($_SESSION["user_role"] == 2) {
    $user_delete = $show_users->delete_data($_REQUEST["id"], "heromarket");
    $status = $show_users->show_msg();
    header("Location:dashboard.php?status=$status");
} elseif ($_SESSION["user_role"] == 3) {
    $user_delete = $show_users->delete_data($_REQUEST["id"], "giantmall");
    $status = $show_users->show_msg();
    header("Location:dashboard.php?status=$status");
} elseif ($_SESSION["user_role"] == 0) {
    $user_delete = $show_users->delete_data($_REQUEST["id"], "users");
    $status = $show_users->show_msg();
    header("Location:dashboard.php?status=$status");
}
