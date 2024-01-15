<!DOCTYPE html>
<html>
<head>
	<style>
body {
	background-image: url('../images/login.jpg');
	background-size: cover;
	color: #ffffff;
}
.form {
	position: absolute;
	top: 25%;
	left: 55%;
	background-color: transparent;
	
}
a:link {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: seagreen;
  background-color: transparent;
  text-decoration: none;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
.already{
	position: absolute;
	top: 25%;
	border-radius: 50%;
	height: 200px;
	width: 500px;
	color: #ffffff;

}
.welcome {
  position: relative;
  background-color: #0bbf17;
  border: 3px solid black;
  margin: 20px;
  padding: 20px;
  width: 300px;
  border-radius: 15px;
  box-shadow:  0px 8px 15px rgba(0, 0, 0, 0.1);
}
</style>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./css/123.css">
    <script type="text/javascript" src="../../JS/login.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div >

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
				
				<br>
		<div class="already">
			<h2><center> <br> Not Registered ?<br><a href ="formreg.php"> Click here</a> <br>to register  </center></h2>
		</div>
		
		<div class="form">
		<div class="welcome">
			<h1> <i>User Login </i></h1>
			
	<form name="login" action="../controller/loginAction.php" autocomplete="off" onsubmit="return validateForm()" method="POST">
     
	<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >
		<span id="message" class="text-danger font-weight-bold"></span>
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password" >
		<span id="message2" class="text-danger font-weight-bold"></span>
	</p>

   
    <br>
	 
	<input class="btn btn-primary" style="border: 2px solid black ;" type="submit" name="submit" value="Sign In"> <input class="btn btn-primary" style="border: 2px solid black ;" type="reset" name="reset">
				
    </form>


    </div>
	</div>
	</div>
	</div>
</div>


    

<br> <br>
</body>
</html>