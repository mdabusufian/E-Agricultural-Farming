<?php 

session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}
if ($_SERVER['REQUEST_METHOD'] === "POST")
{
        
	$seller = $_SESSION['username'];	
        $pname = $_POST['pname'];
        $photo = $_POST['photo'];
        $price = $_POST['price'];
       
     $stat = validate($stat);
       
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "efarm";

                $con = new mysqli($hostname, $username, $password, $database);

                $sql = "INSERT INTO product ( seller,pname,price,photo) VALUES ('$seller','$pname','$price','../../images/$photo')";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
                 	$message = "New product added !!! ";
                    echo "<script type='text/javascript'>alert('$message');window.location = '../view/add.php';</script>";
               
                    }
                else
                 {
                 	
                        $message = "Adding product failed ";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/add.php';</script>";
                }
        }


    








function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>