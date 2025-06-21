<?php
include("connection.php");

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

?>
<section id="sidebar">

    <a class="brand" href="../index.php" style="position: relative;left: 20px !important;top: 30px;"><img src="../assets/images/logo.png" alt="" style="height:60px;">
        <span class="text-dark" style="padding-left: 3% !important;">Nafees Cloth</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="admin_home.php">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="products.php">
                <i class='bx bxs-user-pin'></i>
                <span class="text">Products</span>
            </a>
        </li>
        <li>
            <a href="customer_details.php">
                <i class='bx bxs-group'></i>
                <span class="text">Registered Users</span>
            </a>
        </li>
        <li>
            <a href="contact_details.php">
                <i class='bx bxs-group'></i>
                <span class="text">Contacts/Messages</span>
            </a>
        </li>
        <li>
            <a href="insert_prod.php">
                <i class='bx bxs-cloud-upload'></i>
                <span class="text">Upload Product</span>
            </a>
        </li>

        <li>
            <a href="logout.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>

    </ul>
    <ul class="side-menu">


    </ul>
</section>