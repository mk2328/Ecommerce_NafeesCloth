<?php
session_start();
include 'assets/connection/connection.php'; // Database connection


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);
    $order_notes = mysqli_real_escape_string($conn, $_POST['order_notes']);
    $total_price = mysqli_real_escape_string($conn, $_POST['total_price']);

    // Insert into Orders Table
    $sql = "INSERT INTO orders (first_name, last_name, email, phone, address, city, zip_code, order_notes, total_price) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$zip_code', '$order_notes', '$total_price')";

    if (mysqli_query($conn, $sql)) {
        $order_id = mysqli_insert_id($conn); // Get the last inserted order ID
        
        // Get cart data from AJAX request
        if (isset($_POST['cart'])) {
            $cart = json_decode($_POST['cart'], true); // Decode JSON to array

            if (!empty($cart)) {
                foreach ($cart as $item) {
                    $product_id = mysqli_real_escape_string($conn, $item['id']);
                    $product_name = mysqli_real_escape_string($conn, $item['name']);
                    $product_image = mysqli_real_escape_string($conn, $item['image']);
                    $quantity = (int) $item['qty'];  // Ensure it's an integer
                    $price = (float) $item['price']; // Ensure it's a float
                    $subtotal = $quantity * $price;

                    $sql_details = "INSERT INTO order_details (order_id, product_id, product_name, product_image, quantity, price, subtotal) 
                                    VALUES ('$order_id', '$product_id', '$product_name', '$product_image', '$quantity', '$price', '$subtotal')";
                    mysqli_query($conn, $sql_details);
                }
            }
        }

        // 🔹 **WhatsApp Message Code**
        $message = "📢 *New Order Received!* 📢\n";
        $message .= "🆔 Order ID: *#" . $order_id . "*\n";
        $message .= "👤 Customer: *" . $first_name . " " . $last_name . "*\n";
        $message .= "📧 Email: " . $email . "\n";
        $message .= "📞 Phone: " . $phone . "\n";
        $message .= "📍 Address: " . $address . ", " . $city . " - " . $zip_code . "\n\n";
        $message .= "🛒 *Order Summary:*\n";

        foreach ($cart as $item) {
            $message .= "🛍 *" . $item['name'] . "* (x" . $item['qty'] . ")\n";
            $message .= "💲 Price: Rs" . number_format($item['price'], 2) . "\n";
            $message .= "💰 Subtotal: Rs" . number_format($item['qty'] * $item['price'], 2) . "\n\n";
        }

        $message .= "📢 *Total Amount: Rs" . number_format($total_price, 2) . "*\n";
        // $message .= "✅ Thank you for shopping with us!\n";

        // 🔹 **CallMeBot API Code**
        $whatsapp_number = "923243405170"; // Apna WhatsApp number likho
        $api_key = "7112711"; // CallMeBot API key
        
        $url = "https://api.callmebot.com/whatsapp.php?phone=$whatsapp_number&text=" . urlencode($message) . "&apikey=$api_key";
        file_get_contents($url); // Send WhatsApp message

        echo json_encode(["success" => true, "order_id" => $order_id]);
        exit();
    } else {
        echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
        exit();
    }
}
?>
