<?php
session_start();
include 'assets/connection/connection.php'; // Database connection

if (!isset($_GET['order_id'])) {
    die("Invalid order ID");
}

$order_id = mysqli_real_escape_string($conn, $_GET['order_id']);

// Fetch order details
$order_query = "SELECT * FROM orders WHERE order_id = '$order_id'";
$order_result = mysqli_query($conn, $order_query);
$order = mysqli_fetch_assoc($order_result);

if (!$order) {
    die("Order not found");
}

// Fetch order items
$items_query = "SELECT * FROM order_details WHERE order_id = '$order_id'";
$items_result = mysqli_query($conn, $items_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <?php
    include("assets/components/links.php")
    ?>
    <?php
    include("assets/connection/connection.php")
    ?>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-lg">
            <strong><h2 class="text-center text-dark">Thank You for Your Order!</h2></strong>
            <div class="border-bottom pb-3 mb-3">
                <p><strong>Order ID:</strong> #<?php echo $order['order_id']; ?></p>
                <p><strong>Customer:</strong> <?php echo $order['first_name'] . " " . $order['last_name']; ?></p>
                <p><strong>Email:</strong> <?php echo $order['email']; ?></p>
                <p><strong>Phone:</strong> <?php echo $order['phone']; ?></p>
                <p><strong>Address:</strong> <?php echo $order['address'] . ", " . $order['city'] . " - " . $order['zip_code']; ?></p>
            </div>
            <h3 class="text-center">Order Summary</h3>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_assoc($items_result)) { ?>
                            <tr>
                                <td><?php echo $item['product_name']; ?></td>
                                <td><img src="<?php echo $item['product_image']; ?>" width="60" class="rounded"></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>Rs <?php echo number_format($item['price'], 2); ?></td>
                                <td>Rs <?php echo number_format($item['subtotal'], 2); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <h4 class="text-end text-dark">Total: Rs <?php echo number_format($order['total_price'], 2); ?></h4>
            <div class="text-center mt-4">
                <a href="index.php" class="px-4 default__button">Continue Shopping</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>