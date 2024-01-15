<?php
$id = $_GET['id'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "DELETE FROM registration WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: ../view/sellers.php");
    exit;
} else {
    $message = "Error while deleting ";
     echo "<script type='text/javascript'>alert('$message');window.location = '../view/sellers.php';</script>";
}
?>