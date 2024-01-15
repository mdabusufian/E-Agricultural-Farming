<?php include './header.php';?>
<!DOCTYPE html>
<html>
<title>
Products
</title>
<head>
<style>

    .News{
    position: absolute;   
    top: 20%;
    margin: 5;
  padding: 5;
	display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    
		}
    .myStatus{
      background-color: yellowgreen;
      border: 3px solid black;
      border-radius: 5px; 
    }
</style>
</head>
<body>
<div class="News">
<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";
$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM product  ORDER BY id DESC";
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


                  echo "<div class='myStatus' style='border: 3px solid black;
                  border-radius: 5px; background-color: #ccba70;' >";

echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px; left: 15%;''>"; echo "<br>";
echo "<b>"; echo "Product name :"; echo $name; echo"<br>"; echo "</b>";
echo "<b>"; echo "Added by :"; echo $seller;echo"<br>"; echo "</b>";
echo "<b>"; echo "Price :"; echo $price;echo"<br>"; echo "</b>";
echo "<td><a class='btn btn-success btn-sm' style='border:3px solid black; border-radius: 10px; ' href='buy.php?id=".$row['id']."'>Buy now</a></td>";
echo "&nbsp;";
echo "</div>";

                    }
}
?> 
  

</div>

</div>

</body>
</html>