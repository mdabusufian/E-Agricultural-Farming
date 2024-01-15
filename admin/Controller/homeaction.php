<?php 

session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}
if ($_SERVER['REQUEST_METHOD'] === "POST")
{
        
		
        $stat = $_POST['details'];
        $photo = $_POST['photo'];
       
     $stat = validate($stat);
       
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $database = "efarm";

                $con = new mysqli($hostname, $username, $password, $database);

                $sql = "INSERT INTO news ( photo, details) VALUES ('../../images/$photo', '$stat')";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
                 	$message = "Status Posted !!! ";
                    echo "<script type='text/javascript'>alert('$message');window.location = '../view/home.php';</script>";
               
                    }
                else
                 {
                 	
                        $message = "Status update failed ";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/home.php';</script>";
                }
        }


    








function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>