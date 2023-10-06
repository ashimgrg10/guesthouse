<?php
session_start();

include('connect.php');

$number = $_POST['guests'];
$guesthouse = $_POST['guesthouse'];
$arrival = $_POST['arrival'];
$deprature = $_POST['deprature'];

if(isset($_SESSION['email'])) {
    $loggedInUserId = $_SESSION['email'];

    $sql = "INSERT INTO reservation (idReg, number, guesthouse, arrival, deprature)
            VALUES ('$loggedInUserId', '$number', '$guesthouse', '$arrival', '$deprature')";

    if ($conn->query($sql) === TRUE) {
        echo '
        <doctype html>
        <html>
        <div style="text-align:center;">
        <img  src="thanku.png"  width="50%"  />
        </div>
        <div style="text-align:center; ">
        <button><a href="index.php">Back to Home</a></button>
        </div>
        </html>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    
    echo "please login first";
}

$conn->close();
?>
