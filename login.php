<?php
session_start();
include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql); 

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        $_SESSION["email"] = $email;

        header("Location: index2.php");
    } else {
        echo "Invalid username or password.";
    }
    $conn->close();
}
?>
