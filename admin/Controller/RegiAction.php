<?php

$phn = "null";
$photo = '../../images/defult.png';
$Type = "seller";
$prlink ="null";

$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";

$con = mysqli_connect($hostname, $username, $password, $database);

extract($_POST);

if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['add']) && isset($_POST['mail']) )
{
    $sql = "INSERT INTO registration (username, pass, Type,fname, lname, dob, gender, address, phn, prlink, email, photo) VALUES ('$username','$pass','$Type','$firstname','$lastname','$dob','$gender','$add','$phn','$prlink','$mail','$photo')";
    $stmt= mysqli_query($con,$sql);
    if ($stmt ===true )
                 {
       

                echo "<br>";
                header("Location: ../view/sellers.php");
                    }
                else
                 {
                        $message = "Error while saving ";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/sellers.php';</script>";
                }
}

?>