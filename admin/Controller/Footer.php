<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<footer>
  <form>
    <fieldset>
    <button class= "button" name="click" type="submit" value="admin">Go Back to the Welcome</button>
    <?php

if ($_SERVER['REQUEST_METHOD'] === "POST")

	{ 
		$click = $_POST['click'];

		if ( $click === "admin")

		{
			header("location: ../Fproject/View/Welcome.php");
		}

	}
	?>  
    
    <center><p> <b>Copyrights&nbsp&nbsp&copy <?php echo date("Y/m/d") ; ?></b></p></center>
    </fieldset>
  </form>


</footer>
  </body>
</html>
