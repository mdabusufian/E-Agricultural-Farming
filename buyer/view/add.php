<!DOCTYPE html>
<html>
<title>
	Products
</title>
<head>
<style>

    .News{
      position: absolute;   
    top: 57%;
    left: 10px; 
	display: grid;
    grid-template-columns: repeat(5, 1fr);
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
    left: 30%; 
		}
</style>

<script type="text/javascript" src="../../JS/home.js"></script>
</head>
<body>
    
<?php include './header.php';?>
<div class="status">
  <h1> Add New Products </h1>
  <form name="post" action="../Controller/homeaction.php" onsubmit="return validateForm2()" method = "POST" >
    
    <input type="file" style="border-radius: 10px; " name="photo" ><br>
  	<input type="text"  name="pname" style="border-radius: 10px; " placeholder=" Add A Name "> <br>
    <input type="number"  name="price" style="border-radius: 10px; " placeholder=" Price "> <br>
<br>
<input class="btn btn-primary" style="position:absolute; left: 4cm; border : 2px solid black ; " type="submit" name="submit" value="POST"> 
  </form>
</div>



<div class="News">
<?php

$user = $_SESSION['username'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";
$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM product where seller='$user' ORDER BY id DESC";
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
echo "<td><a class='btn btn-primary btn-sm' style='border:3px solid black; border-radius: 10px; ' href='edit.php?id=".$row['id']."'>Edit</a></td>";
echo "&nbsp;";
echo "<td><a class='btn btn-danger btn-sm' style='border:3px solid black; border-radius: 10px; ' href='../Controller/deleteAction.php?id=".$row['id']."'>Delete</a></td>";
echo "</div>";

                    }
}
?> 
  

</div>

</div>

</body>
</html>