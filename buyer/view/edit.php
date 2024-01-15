<!DOCTYPE html>
<html>
<title>
	Products
</title>
<head>
<style>

    .News{
      position: absolute;   
    top: 25%;
    left: 40%; 
    gap: 15px;
    
		}
    .own {
      position: absolute;   
    top: 18%;
    left: 50%;
    }
    .status{
      background-color: orangered;
      height: 290px;
      width: 320px;
      border: 10px solid black;
      border-radius: 10px;
    position: absolute;  
    color: green; 
    top: 20%;
    left: 25%; 
		}
</style>

<script type="text/javascript" src="../../JS/home.js"></script>
</head>
<body>
    
<?php include './header.php';?>
<div class="News">
<?php

$user = $_SESSION['username'];
$id = $_GET['id'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";
$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM product where id='$id' ";
$stmt = $con->prepare($sql);
$stmt ->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{



while($row = $result->fetch_assoc())
    {
        $seller= $row["seller"];
        $name = $row["pname"];
        $price= $row["price"];
        $photo = $row["photo"];
        $id = $row["id"];


                  echo "<div class='myStatus' style='border: 3px solid black;
                  border-radius: 5px; background-color: #ccba70;' >";
echo"<form action='../Controller/edit.php' method='POST'>";
echo"<input type='text' name='id' value='$id' hidden>";
echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px; left: 15%;''>"; echo "<br>";
echo "<b>"; echo "Product name :"; echo"<input type='text' name='pname' value='$name'>"; echo"<br>"; echo "</b>";
echo "<b>"; echo "Added by :"; echo $seller;echo"<br>"; echo "</b>";
echo "<b>"; echo "Price :"; echo"<input type='text' name='price' value='$price'>";echo"<br>"; echo "</b>";
echo "<td><input type='submit' value='update' class='btn btn-primary btn-sm' style='border:3px solid black; border-radius: 10px; ' ></td>";
echo "<td><a class='btn btn-danger btn-sm' style='border:3px solid black; border-radius: 10px; ' href='../Controller/deleteAction.php?id=".$row['id']."'>Delete</a></td>";
echo "</div>";

echo"</form>";                    }
}
?> 
  

</div>

</div>

</body>
</html>