<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
	<style>
		body {
  background-image: url('../images/bg.jpg');
}
.welcome {
  position: relative;
  top: 150px;
  left: 30%;
  background-color: skyblue;
  color: white;
  border: 3px solid black;
  margin: 20px;
  padding: 20px;
  height: 250px;
  width: 600px;
  border-radius: 15px;
  box-shadow:  0px 8px 15px rgba(0, 0, 0, 0.1);
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  box-shadow:  0px 8px 15px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  background-color: lightgreen;
  
  }
</style>
</head>
<body>

<div class="welcome"; >

<style> h1 , h2 , p {text-align: center;}</style>

<h1 style="color:Green;" >  Welcome To Agorian Farm </h1> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <h1 style="color:DFF7B0 ;"> You want to view site as a : </h1>
<p><button class= "button" name="click" type="submit" value="admin">Admin</button>
<button class= "button" name="click" type="submit" value="buyer"> Seller </button>
<button class= "button" name="click" type="submit" value="customer"> Customer </button></p>
<?php

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "admin")

		{
			header("Location: ../admin/view/login.php");

		}

		if ( $click === "buyer")
		{
			header("Location: ../buyer/view/login.php");

		}
		if ( $click === "customer")
		{
			header("Location: ../customer/view/login.php");

		}
	}
	?>

</form>
</div>
 <br> <br>	
</body>
</html>