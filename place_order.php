<?php
session_start();
include 'assets/connection/connection.php';

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

    $sql = "INSERT INTO orders (first_name, last_name, email, phone, address, city, zip_code, order_notes, total_price) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$zip_code', '$order_notes', '$total_price')";

    if (mysqli_query($conn, $sql)) {
        $order_id = mysqli_insert_id($conn);

        if (isset($_POST['cart'])) {
            $cart = json_decode($_POST['cart'], true);
            if (!empty($cart)) {
                foreach ($cart as $item) {
                    $product_id = mysqli_real_escape_string($conn, $item['id']);
                    $product_name = mysqli_real_escape_string($conn, $item['name']);
                    $product_image = mysqli_real_escape_string($conn, $item['image']);
                    $quantity = (int) $item['qty'];
                    $price = (float) $item['price'];
                    $subtotal = $quantity * $price;

                    $sql_details = "INSERT INTO order_details (order_id, product_id, product_name, product_image, quantity, price, subtotal) 
                                    VALUES ('$order_id', '$product_id', '$product_name', '$product_image', '$quantity', '$price', '$subtotal')";
                    mysqli_query($conn, $sql_details);
                }
            }
        }

        // Owner Email Content
        // Owner Email Content
        $ownerMessage = "<h2>-New Order Received!</h2>";
        $ownerMessage .= "<p><strong>Order ID:</strong> #" . $order_id . "</p>";
        $ownerMessage .= "<p><strong>Customer:</strong> " . $first_name . " " . $last_name . "</p>";
        $ownerMessage .= "<p><strong>Email:</strong> " . $email . "</p>";
        $ownerMessage .= "<p><strong>Phone:</strong> " . $phone . "</p>";
        $ownerMessage .= "<p><strong>Address:</strong> " . $address . ", " . $city . " - " . $zip_code . "</p>";

        $ownerMessage .= "<hr><h3>🛒 Order Summary:</h3>";
        $ownerMessage .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
        $ownerMessage .= "<thead><tr><th>Item</th><th>Qty</th><th>Price</th><th>Subtotal</th></tr></thead><tbody>";

        foreach ($cart as $item) {
            $subtotal = $item['qty'] * $item['price'];
            $ownerMessage .= "<tr>";
            $ownerMessage .= "<td>" . $item['name'] . "</td>";
            $ownerMessage .= "<td>" . $item['qty'] . "</td>";
            $ownerMessage .= "<td>Rs " . number_format($item['price'], 2) . "</td>";
            $ownerMessage .= "<td>Rs " . number_format($subtotal, 2) . "</td>";
            $ownerMessage .= "</tr>";
        }

        $ownerMessage .= "</tbody></table>";
        $ownerMessage .= "<p><strong>Total Amount:</strong> Rs " . number_format($total_price, 2) . "</p>";

        // Customer Email Content
        $customerMessage = "<h2>-Order Confirmed!</h2>";
        $customerMessage .= "<p>Dear <strong>" . $first_name . "</strong>,</p>";
        $customerMessage .= "<p>Thank you for your order. We have received your order #<strong>" . $order_id . "</strong>.</p>";
        $customerMessage .= "<p>We will contact you soon at <strong>" . $phone . "</strong> or email <strong>" . $email . "</strong>.</p>";

        $customerMessage .= "<hr><h3>🧾 Your Order Summary:</h3>";
        $customerMessage .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
        $customerMessage .= "<thead><tr><th>Item</th><th>Qty</th><th>Price</th><th>Subtotal</th></tr></thead><tbody>";

        foreach ($cart as $item) {
            $subtotal = $item['qty'] * $item['price'];
            $customerMessage .= "<tr>";
            $customerMessage .= "<td>" . $item['name'] . "</td>";
            $customerMessage .= "<td>" . $item['qty'] . "</td>";
            $customerMessage .= "<td>Rs " . number_format($item['price'], 2) . "</td>";
            $customerMessage .= "<td>Rs " . number_format($subtotal, 2) . "</td>";
            $customerMessage .= "</tr>";
        }

        $customerMessage .= "</tbody></table>";
        $customerMessage .= "<p><strong>Total Amount:</strong> Rs " . number_format($total_price, 2) . "</p>";
        $customerMessage .= "<p>📦 We’ll start processing your order shortly!</p>";


        try {
            // --- Create mail object once ---
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nafeescloth4@gmail.com';
            $mail->Password = 'duwl vvpr fcfh tuxv';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->isHTML(true);
            $mail->setFrom('nafeescloth4@gmail.com', 'E-Commerce Website');

            // --- Send to Owner ---
            $mail->addAddress('nafeescloth4@gmail.com', 'Shop Owner');
            $mail->Subject = '🛒 New Order Received - Order #' . $order_id;
            $mail->Body = $ownerMessage;
            $mail->AltBody = strip_tags($ownerMessage);
            $mail->send();

            // --- Send to Customer ---
            $mail->clearAddresses(); // clear owner email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode(["success" => false, "error" => "Invalid customer email: $email"]);
                exit();
            }

            $mail->addAddress($email, $first_name . ' ' . $last_name);
            $mail->Subject = 'Order Confirmation - Order #' . $order_id;
            $mail->Body = $customerMessage;
            $mail->AltBody = strip_tags($customerMessage);
            $mail->send();

            echo json_encode(["success" => true, "order_id" => $order_id]);
            exit();
        } catch (Exception $e) {
            echo json_encode(["success" => false, "error" => "Email Error: {$e->getMessage()}"]);
            exit();
        }
    } else {
        echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
        exit();
    }
}
