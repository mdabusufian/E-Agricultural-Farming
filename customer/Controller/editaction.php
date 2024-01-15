<?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../controller/logout.php");
}




if ($_SERVER['REQUEST_METHOD'] === 'POST')



{
$pass = $_POST['pass'];
$fname = $_POST['fname'];
$dob= $_POST['dob'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$lname =$_POST['lname'];
$phn =$_POST['phn'];
$prlink =$_POST['prlink'];
$add =$_POST['add'];
$user= $_SESSION['username'];
$photo = $_POST['photo'];




$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";



$con = new mysqli($hostname, $username, $password, $database);




$sql = "UPDATE registration set fname='$fname', address= '$add', prlink= '$prlink', phn='$phn', lname='$lname', dob='$dob',gender='$gender',email='$email', pass='$pass', photo='../../images/$photo' where username ='$user' ";



$data =$con->query($sql);



if ($data === TRUE )
{



$message= "Information has been updated";
echo "<script type='text/javascript'>alert('$message');window.location = '../view/profile.php';</script>";





}
else
{



 $message= "Failed updating ";
 echo "<script type='text/javascript'>alert('$message');window.location = '../view/EditProfile.php';</script>";
}
}
?>