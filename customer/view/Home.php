<?php include './header.php';?>
<!DOCTYPE html>
<html>
<title>
	Home
</title>
<head>
<style>
    .slideshow{
    position: absolute;
	top: 25%;
	left: 35%;
	background-color: transparent;
    
}
    .News{
    position: absolute;   
    top: 80%; 
	  display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    
		}
</style>
</head>
<body>

<div class="slideshow" style="max-width: 500px ;">
  <img class="mySlides" src="../images/image1.jpg" style="width:100%">
  <img class="mySlides" src="../images/image2.jpg" style="width:100%">
  <img class="mySlides" src="../images/image3.jpg" style="width:100%">

  
</div>

<script type="text/javascript" src="../../JS/home.js"></script>

<div class="News">
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";
$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM news ORDER BY id DESC";
$stmt = $con->prepare($sql);
$stmt ->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{



while($row = $result->fetch_assoc())
    {
        $idv= $row["id"];
        $details= $row["details"];
        $photo = $row["photo"];


                  echo "<div class='myStatus' style='border: 3px solid black;
                  border-radius: 5px; background-color: lightblue'>";

echo "<b>"; echo "NEWS :"; echo $idv;echo"<br>"; echo "</b>";
echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px; left: 15%;''>"; echo "<br>";
echo "<b>"; echo "Description :"; echo "</b>"; echo $details; echo"<br>"; echo "<hr>";
echo "</div>";
                    }
}
?> 
  

</div>

</div>

</body>
</html>