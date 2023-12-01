<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// database connection
$conn = new mysqli('localhost', 'root', '', 'coffee_stop');
if ($conn->connect_error){
    die('connection failed' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(name, email, message) values (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>
