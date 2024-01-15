<!DOCTYPE html>
<html>
<title>
	Home
</title>
<head>
<script type="text/javascript">
		
		function validateForm() {
  let x = document.forms["post"]["details"].value;
  let y = document.forms["post"]["photo"].value;

  if ( x== "" && y == "")
   {
   	alert("Empty submission");
    return false;
   }
   else if (x == "") {
    alert("write something ");
    return false;
  }
  else if (y == "") {
    alert("Upload a photo");
    return false;
  }
 }
 </script>
<style>
   
    .News{
    position: absolute;   
    top: 57%;
    left: 10px; 
	display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    
		}
    .status{
    position: absolute;  
    color: green; 
    top: 20%;
    left: 25%; 
		}
</style>
</head>
<body>
<?php include './header.php';?>



<div class="status">
  <h1> Add new Agricultural News </h1>
  <form name="post" action="../Controller/homeaction.php" onsubmit="return validateForm()" method = "POST" >
    
    <input type="file"  name="photo" ><br>
  	<input type="textarea" size="50" name="details" style="height:100px; border-radius: 10px; " placeholder=" Add discription "> <br>
<br>
<input class="btn btn-primary" style="position:absolute; left: 11cm; border : 2px solid black ; " type="submit" name="submit" value="POST"> 
  </form>
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
                  border-radius: 15px; background-color: lightblue'>";

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