<?php
session_start();
include("connection.php");

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
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
      <h2>Upload Product</h2>
    </div>
    <form action="prod_process.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="input-data">
          <input type="text" name="product_name" required placeholder="Product Name">
        </div>
        <div class="input-data">
          <input type="number" name="unit_price" required placeholder="Unit Price">
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <input type="number" name="qty" required placeholder="Quantity">
        </div>
        <div class="input-data">
          <input type="number" name="subcat_id" required placeholder="Category ID(1 for Women & 2 for Kids)">
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <input type="file" name="image" required placeholder="Prod Image">
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <textarea name="description" rows="4" required placeholder="Product description"></textarea>
        </div>
      </div>
  
      <div class="form-row submit-btn">
        <input type="submit" value="Insert" name="save">
      </div>
    </form>
  </div>

</body>

</html>