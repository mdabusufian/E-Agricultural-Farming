<?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../controller/logout.php");
}




if ($_SERVER['REQUEST_METHOD'] === 'POST')



{

$pname = $_POST['pname'];
$price= $_POST['price'];
$id = $_POST['id'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";



$con = new mysqli($hostname, $username, $password, $database);




$sql = "UPDATE product set pname='$pname', price= '$price' where id='$id' ";



$data =$con->query($sql);



if ($data === TRUE )
{



$message= "Information has been updated";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/add.php';</script>";





}
else
{



 $message= "Failed updating ";
 echo "<script type='text/javascript'>alert('$message');window.location = '../view/add.php';</script>";
}
}
?>