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
    margin: 5;
  padding: 5;
	display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 15px;
    
    
		}
    .own {
      position: absolute;   
    top: 18%;
    left: 50%;
    }
</style>
</head>
<body>
<div class="own">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">  
<button class="btn btn-warning btn-sm" name="click" style=" background-color: Orange; border: 2px solid black; border-radius: 15px;" type="submit" value="yes">View Your Products</button>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "yes")

		{
			header("Location: ../view/add.php");

		}
    }
    ?>
</form>
  </div>
<?php include './header.php';?>
<div class="News">
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";
$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM product ORDER BY id DESC";
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


                  echo "<div class='myStatus' style='border: 3px solid black; background-color: #ccba70;
                  border-radius: 5px;'>";

echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px; left: 15%;''>"; echo "<br>";
echo "<b>"; echo "Product name :"; echo $name; echo"<br>"; echo "</b>";
echo "<b>"; echo "Added by :"; echo $seller;echo"<br>"; echo "</b>";
echo "<b>"; echo "Price :"; echo $price;echo"<br>"; echo "</b>";
echo "</div>";

                    }
}
?> 
  

</div>

</div>

</body>
</html>