<?php
session_start();
include 'assets/connection/connection.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = trim($_POST["username_or_email"]);
    $password = $_POST["password"];

    // Query to check user in database
    $sql = "SELECT id, fullname, username, email, password, role FROM users2 WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username_or_email, $username_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Password verify karo
        if (password_verify($password, $row["password"])) {
            // Session start karo
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['role'] = $row['role'];

            // Admin check karo
            if ($row["role"] == "admin") {
                $_SESSION['success'] = "Welcome Admin!";
                echo "<script>
                        alert('Admin logged in successfully!');
                        window.location.href = 'admin/admin_home.php';
                      </script>";
                exit();
            } else {
                $_SESSION['success'] = "Login Successful!";
                echo "<script>
                        alert('User Logged in Successfully!');
                        window.location.href = 'index.php';
                      </script>";
                exit();
            }
        } else {
            $_SESSION['error'] = "Invalid username/email or password!";
            echo "<script>
                alert('Invalid Username or password!');
                window.location.href = 'login.php';
            </script>";
            exit();
        }
    } else {
        $_SESSION['error'] = "No user found!";
        echo "<script>
                alert('No User Found!');
                window.location.href = 'login.php';
            </script>";
        exit();
    }

    $stmt->close();
    $conn->close();
}
