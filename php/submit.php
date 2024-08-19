<?php
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;
echo "Script is running!";
error_reporting(E_ALL);
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
ini_set('display_errors', 1);
var_dump($_POST);
// Database connection
$conn = new mysqli('localhost', 'root', '', 'coffee_stop');
echo "Script is running!";
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (name, email, message) VALUES (?, ?, ?)");

    if ($stmt === false) {
        die('Error in preparing statement: ' . $conn->error);
    }

    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Registration Successful...";
    } else {
        die('Error in execution: ' . $stmt->error);
    }

    $stmt->close();
    $conn->close();
    
}
?>
