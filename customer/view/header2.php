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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

</style>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<b><h1 class="w3-center" style="color: GREEN;font-size:300%;">Welcome to Agorian Farm</h1></b>
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
</div>
</body>
</html>