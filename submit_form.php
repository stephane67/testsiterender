<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Process the data as needed (e.g., store in database, send email, etc.)
    
    echo "Thank you, $name! We have received your message.";
} else {
    echo "Invalid submission!";
}
?>
