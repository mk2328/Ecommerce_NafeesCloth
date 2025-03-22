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

$product_id = $_GET['product_id']; // Get product ID from URL
$update = "SELECT * FROM product WHERE product_id='$product_id'";
$result = mysqli_query($conn, $update);
$data = mysqli_fetch_array($result);

if (isset($_POST['save'])) {
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

  // Image Upload Handling
  if ($fileerror == 0) {
    $destfile = $destfolder . basename($filename); // Actual path where the file is stored
    $db_destfile = $db_path . basename($filename); // Path stored in DB
    move_uploaded_file($filepath, $destfile);
  } else {
    $db_destfile = $data['image']; // Keep old image if no new one is uploaded
  }

  // Update Query
  $sql = "UPDATE product SET 
            product_name='$product_name', 
            unit_price='$unit_price', 
            qty='$qty', 
            subcat_id='$subcat_id', 
            description='$description', 
            image='$db_destfile' 
            WHERE product_id='$product_id'";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Product updated successfully!');
    window.location.href = 'products.php';
  </script>";
    exit();
  } else {
    echo "<script>alert('Error updating product.');</script>";
  }
}
?>



<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Animal Feed</title>
  <link rel="stylesheet" href="css/insert_prod.css">


</head>

<body>


  <div class="container">
    <div class="text">
      <h2>Update Product</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="input-data">
          <input type="text" name="product_name" value="<?php echo $data['product_name']; ?>" required placeholder="Product Name">
        </div>
        <div class="input-data">
          <input type="number" name="unit_price" value="<?php echo $data['unit_price']; ?>" required placeholder="Unit Price">
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <input type="number" name="qty" value="<?php echo $data['qty']; ?>" required placeholder="Quantity">
        </div>
        <div class="input-data">
          <input type="number" name="subcat_id" value="<?php echo $data['subcat_id']; ?>" required placeholder="Category ID(1 for Women & 2 for Kids)">
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <input type="file" name="image">
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <textarea name="description" rows="4" required placeholder="Product description"><?php echo $data['description']; ?></textarea>
        </div>
      </div>

      <div class="form-row submit-btn">
        <input type="submit" value="Update" name="save">
      </div>
    </form>
  </div>




</body>

</html>