<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Establish connection to MySQL database
    $servername = "localhost"; //MySQL server name
    $username = "id21987217_myportfoliojacobbiketi"; // MySQL username
    $password = "Myportfoliojacobbiketi2023>"; //  MySQL password
    $dbname = "id21987217_myportfoliojacobbiketi"; // MySQL database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into a table
    $sql = "INSERT INTO message_me (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Close prepared statement and database connection
        $stmt->close();
        $conn->close();
        echo "<script>alert('Email Submitted, Kindly wait for response. Thank you'); window.location.href = 'index.html';</script>";
        exit;
    } else {
        echo "Email not sent! Error: " . $stmt->error;
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>
