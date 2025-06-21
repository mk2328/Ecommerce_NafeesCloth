<?php
include("assets/connection/connection.php"); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST["con_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["con_email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["con_phone"]);
    $subject = mysqli_real_escape_string($conn, $_POST["con_subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["con_message"]);

    // SQL Query
    $sql = "INSERT INTO contacts (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {

        // WhatsApp Message Content
        $whatsappMessage = "📩 *New Contact Form Submission!*\n\n";
        $whatsappMessage .= "👤 *Name:* " . $name . "\n";
        $whatsappMessage .= "📧 *Email:* " . $email . "\n";
        $whatsappMessage .= "📞 *Phone:* " . $phone . "\n";
        $whatsappMessage .= "📝 *Subject:* " . $subject . "\n";
        $whatsappMessage .= "💬 *Message:* " . $message . "\n\n";
        

        // CallMeBot API Setup
        $whatsapp_number = "923243405170"; // Owner's WhatsApp number
        $api_key = "7112711"; // CallMeBot API key

        // Send message via CallMeBot API
        $url = "https://api.callmebot.com/whatsapp.php?phone=$whatsapp_number&text=" . urlencode($whatsappMessage) . "&apikey=$api_key";
        file_get_contents($url); // Trigger WhatsApp message

        // Redirect or show success alert
        echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'contact.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error sending message. Please try again.'); window.location.href = 'contact.php';</script>";
        exit();
    }

    $conn->close();
}
?>
