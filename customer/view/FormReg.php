<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<style>
	body {
	background: url('../images/reg.jpg');
	background-size: cover;
	color: #ffffff;
}
.form {
	position: absolute;
	top: 15%;
	left: 5%;
	background-color: transparent;
	
}
a:link {
  color: blue;
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
  color: green;
  background-color: transparent;
  text-decoration: none;
}
.already{
	position: absolute;
	top: 25%;
	left: 50%;
	background-color: #0bbf17;
	border-radius: 50%;
	height: 200px;
	border: 3px solid black;
	width: 500px;
	color: black;
}
.welcome {
  position: relative;
  background-color: #0bbf17;
  border: 3px solid black;
  margin: 20px;
  padding: 20px;
  width: 500px;
  border-radius: 15px;
  box-shadow:  0px 8px 15px rgba(0, 0, 0, 0.1);
}

</style>
<link rel="stylesheet" type="text/css" href="./css/123.css">
<script type="text/javascript" src="../../JS/reg.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div>

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
		<h1 style="color: white ;">Registration Form</h1>

		<div class="already">
			<h2><center> <br> Already Registered ?<br> <a href ="../view/login.php"> Click here</a> <br>To Login </center></h2>
		</div>
	<div class="form">
	<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
		<div class="welcome">
		<form name="reg" action="../Controller/RegiAction.php" onsubmit="return validateForm()" method="POST">
		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >
		<span id="message" class="text-danger font-weight-bold"></span>
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password"  >
		<span id="message1" class="text-danger font-weight-bold"></span>
		<br>
		<b>First Name:  </b><input class="form-control" type="text" name="firstname" placeholder="First name"  >
		<span id="message2" class="text-danger font-weight-bold"></span>
		<br>
		<b>Last Name:  </b><input class="form-control" type="text" name="lastname" placeholder="Last name"  >
		<span id="message3" class="text-danger font-weight-bold"></span>
		<br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"  >
		Male
		<input type="radio" name="gender" value="Female" >
		Female
		<input type="radio" name="gender" value="other" >
		Other
		<br>
		<b>Date of birth:  </b><input class="form-control" type="date" name = "dob"  >
		<span id="message4" class="text-danger font-weight-bold"></span>
		<br>
		<b>Present Address: </b><input class="form-control" type="textarea" name ="add" placeholder="Present Address" >
		<span id="message5" class="text-danger font-weight-bold"></span>
		<br>
		<b>Email:  </b><input class="form-control" type="email" name ="mail" placeholder="E-mail">
		<span id="message6" class="text-danger font-weight-bold"></span>
	</p>
		<br>
		<input class="btn btn-primary" style="border: 2px solid black ;" type="submit" name="submit" value="Sign Up"> <input class="btn btn-primary" style="border: 2px solid black ;" type="reset" name="reset">
		</form>
		</div>
	</div>
	</div>
	</div>
	</div>

</div>
		<br><br>
</body>
</html>