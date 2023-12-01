<?php
// $name = isset($_POST['name']) ? $_POST['name'] : null;
// $email = isset($_POST['email']) ? $_POST['email'] : null;
// $message = isset($_POST['message']) ? $_POST['message'] : null;
// $name = $_POST["name"];
// $email = $_POST['email'];
// $message = $_POST['message'];
// //database connection
// $conn = new mysqli('localhost', 'root', '', 'coffee_stop');
// if ($conn->connect_error){
//     die('connection failed' . $conn->connect_error);
// } else {
//     $stmt = $conn->prepare("insert into registration(name, email, message) values (?, ?, ?)");
//     $stmt->bind_param("sss", $name, $email, $message);
//     $stmt->execute();
//     echo "registration Successfully...";
//     $stmt->close();
//     $conn->close();
//     var_dump($_POST);
// }

$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;

//database connection
$conn = new mysqli('localhost', 'root', '', 'coffee_stop');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (name, email, message) VALUES (?, ?, ?)");

    if ($stmt === false) {
        die('Error in preparing statement: ' . $conn->error);
    }

    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Registration Successfully...";
    } else {
        die('Error in execution: ' . $stmt->error);
    }

    $stmt->close();
    $conn->close();
    var_dump($_POST);
}
?>
