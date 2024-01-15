<?php 
 session_start();
if (count($_SESSION)===0) 
{
	header("location: ../Controller/logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
 body {
      background-color: #eddbbb;
	background-size: cover;
	color: black;
    font-family: Arial, Helvetica, sans-serif;
}

.logout{
position: fixed;
top: 10px;
right: 2px;
border: 2px solid black;
border-radius: 15px;

}
.profile{
position: absolute;
top: 10px;
right: 45px;
border: 2px solid black;
border-radius: 15px;

}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  border: #111;
  box-sizing: content-box;
}

li {
 text-align:center;
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: scandir;
  border: #111;
  box-sizing: content-box;
  
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: green;
  
}
</style>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<b>
  <h1 class="w3-center" style="color: GREEN;font-size:300%;">
<i class="ace-icon fa fa-leaf green"></i>
Welcome to Agorian Farm</h1></b>

<ul>
  <li><a class="active" href="../view/Home.php">Home</a></li>
  <li><a class="active" href="../view/AddProduct.php">View all Products</a></li>
  <li><a class ="active" href="../view/join.php">Join Donation</a></li>
  <li><a href="../../admin/view/about.php">About</a></li>
</ul>


<div class="logout">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">   
<button  class="btn btn-default btn-sm" name="click" style=" background-color: red;border-radius: 15px;" type="submit" value="admin">
          <span class="glyphicon glyphicon-log-out" ></button>
<?php

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "admin")

		{
			header("Location: ../Controller/logout.php");

		}
    }
    ?>
</form>
</div>
<div class="profile">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">   
<button  class="btn btn-default btn-sm" name="click" style=" background-color: grey;border-radius: 15px;" type="submit" value="profile">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></button>
<?php

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "profile")

		{
			header("Location: ../view/profile.php");

		}
    }
    ?>
</form>
</div>
</body>
</html>