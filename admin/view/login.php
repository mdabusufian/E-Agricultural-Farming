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
	left: 35%;
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
.welcome {
  position: relative;
  background-color: #ccff99;
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
</head>
<body>

<div >

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
				
				<br>
		
		
		<div class="form">
		<div class="welcome">
			<h1> <i>User Login </i></h1>
	<form name="login" action="../controller/loginAction.php" onsubmit="return validateForm()" method="POST">
     
		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password" >
	</p>

   
    <br>
	 
			<input class="btn btn-primary" type="submit" name="submit" value="Sign In"> <input class="btn btn-primary" type="reset" name="reset"> <br> <br>
			
    </form>


    </div>
	</div>
	</div>
	</div>
</div>

<br> <br>
</body>
</html>