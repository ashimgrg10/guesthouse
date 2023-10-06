<?php
include("connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO registration (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit; 
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
    <!DOCTYPE html>
    <html>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tangting Guest House</title>
        
            <link
        rel="stylesheet"    
        href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
        />
        
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        
            <link rel="stylesheet" href="register.css">
        </head>
        <body>
        <div class="registration-form">
            <h1>Registration form</h1>
            <form action="" method="POST">
                <p>First Name:</p>
                <input type="text" name="firstname" placeholder="First Name">
                <p>Last Name:</p>
                <input type="text" name="lastname" placeholder="Last Name">
                <p>Email:</p>
                <input type="email" name="email" placeholder="Email">
                <p>Password:</p>
                <input type="password" name="password" placeholder="password">
                <button type="submit"><input type="submit" value="Register"></button>
            </form>
        </div>
        </body>
    </html>