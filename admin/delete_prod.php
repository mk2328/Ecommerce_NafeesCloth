<?php
session_start();
include("connection.php");

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

?>
<?php

include 'connection.php';

$product_id = $_GET['product_id'];

$delete = "DELETE FROM product where product_id ='$product_id'";


mysqli_query($conn,$delete);


header('Location:admin_home.php');

?>




