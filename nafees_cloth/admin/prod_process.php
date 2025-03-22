

<?php
session_start();
include("connection.php");

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

?>
<?php

$product_name = $_POST['product_name'];
$unit_price = $_POST['unit_price'];
$qty = $_POST['qty'];
$subcat_id = $_POST['subcat_id'];
$description = $_POST['description'];
$image = $_FILES['image'];

$filename = $image['name'];
$filepath = $image['tmp_name'];
$fileerror = $image['error'];

// Actual file storage path
if ($subcat_id == 1) {
    $destfolder = '../assets/images/women/'; // Actual storage path
    $db_path = 'assets/images/women/'; // Path to store in DB
} elseif ($subcat_id == 2) {
    $destfolder = '../assets/images/kids/';
    $db_path = 'assets/images/kids/';
} else {
    $destfolder = 'assets/images/others/';
    $db_path = 'uploads/others/';
}

if ($fileerror == 0) {
    $destfile = $destfolder . basename($filename); // Actual path where the file is stored
    $db_destfile = $db_path . basename($filename); // Path stored in DB

    if (move_uploaded_file($filepath, $destfile)) {
        if (isset($_POST['save'])) {
            $sql = "INSERT INTO product (product_name, unit_price, qty, subcat_id, description, image) 
                    VALUES ('$product_name', '$unit_price', '$qty', '$subcat_id', '$description', '$db_destfile')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>
                        alert('Product inserted successfully!');
                        window.location.href = 'products.php';
                      </script>";
                exit();
            } else {
                echo "Error in insertion: " . mysqli_error($conn);
            }
        }
    } else {
        echo "<script>alert('Error uploading file.');</script>";
    }
} else {
    echo "<script>alert('Error with the file.');</script>";
}
