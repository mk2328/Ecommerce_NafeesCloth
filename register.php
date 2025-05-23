<?php
session_start();
include 'assets/connection/connection.php'; // Database connection file include karo

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form se values lo
    $fullname = trim($_POST["fullname"]);
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check karo passwords match kar rahe hain ya nahi
    if ($password !== $confirm_password) {
        die("Error: Passwords do not match!");
    }

    // Password ko hash karo (security ke liye)
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $role = 'customer';

    // Database me insert karo
    $sql = "INSERT INTO users2 (fullname, username, email, phone, address, password, role) 
            VALUES (?, ?, ?, ?, ?, ? , ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $fullname, $username, $email, $phone, $address, $hashed_password , $role);

    if ($stmt->execute()) {
        // User ka session start karo
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $fullname;

        // Redirect user to index.php
        // echo "<script>alert('User Registered Successfully')</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
