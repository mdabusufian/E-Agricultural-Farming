<?php

include './header.php';

?>
<!DOCTYPE html>
<html>

<head>
  <title>Customers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../../JS/reg.js"></script>
  <style>
body {
  background-color: #eddbbb;
	background-size: cover;
	color: black;
    font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>


<div class="name">
    <h1 class="text-primary text-bold text-center">All customers are shown bellow</h1>
    <div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
     Add new one
    </button>
    </div>
    <div>
        <h2 class="text-danger">ALL RECORDS</h2>
    </div>
    <div id="readRecords">
    <?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";

$con = mysqli_connect($hostname, $username, $password, $database);

$sql="SELECT * FROM registration WHERE Type = 'customer'";
$result = mysqli_query($con,$sql);

echo "<table class= 'table table-bordered table-striped'>
<tr>
<th>NO.</th>
<th>Username</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Phone</th>
<th>Email</th>
 </tr>";
if (mysqli_num_rows($result) > 0)
            {
              $number =1;
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $number . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['phn'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
 echo "</tr>";
  $number++;
}

echo "</table>";
            }
?>
    
    	
    </div>

    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      
      <div class="modal-header">
        <h4 class="modal-title">Register New Customers</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      
      <div class="modal-body">
        <div class="form-group">
        <div class="form">
	<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
		<div class="welcome">
		<form name="reg" action="../Controller/customer.php" onsubmit="return validateForm()" method="POST">
		<b>Username:  </b><input class="form-control" type="text" name="username" id ="username" placeholder="User name" >
		<span id="message" class="text-danger font-weight-bold"></span>
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="pass" id="pass" placeholder="Password"  >
		<span id="message1" class="text-danger font-weight-bold"></span>
		<br>
		<b>First Name:  </b><input class="form-control" type="text" name="firstname" id="firstname" placeholder="First name"  >
		<span id="message2" class="text-danger font-weight-bold"></span>
		<br>
		<b>Last Name:  </b><input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last name"  >
		<span id="message3" class="text-danger font-weight-bold"></span>
		<br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" id="gender" value="Male"  >
		Male
		<input type="radio" name="gender" id="gender" value="Female" >
		Female
		<input type="radio" name="gender" id="gender" value="other" >
		Other
		<br>
		<b>Date of birth:  </b><input class="form-control" type="date" name = "dob" id="dob" >
		<span id="message4" class="text-danger font-weight-bold"></span>
		<br>
		<b>Present Address: </b><input class="form-control" type="textarea" name ="add" id="add" placeholder="Present Address" >
		<span id="message5" class="text-danger font-weight-bold"></span>
		<br>
		<b>Email:  </b><input class="form-control" type="email" name ="mail" id="mail" placeholder="E-mail">
		<span id="message6" class="text-danger font-weight-bold"></span>
	</p>
		<br>
		<button class="btn btn-success" style="border: 2px solid black ;" onclick="addRecord2()"> Sign Up</button> <input class="btn btn-primary" style="border: 2px solid black ;" type="reset" name="reset">
		</form>
		</div>
	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>


<script type="text/javascript">

  $(document).ready(function(){
    readRecords();
  });


 function readRecords(){

    $.ajax({
      url:"sellers.php",
      type:'get',
      success:function(data,status)
      {
          $('#readRecords').html(data);
      }

    });
 }



	function addRecord2() {
		var username = $('#username').val();
    var pass = $('#pass').val();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var gender = $('#gender').val();
    var dob = $('#dob').val();
    var add = $('#add').val();
    var mail = $('#mail').val();

    $.ajax({
      url:"sellers.php",
      type:'post',
      data: {username:username,
        pass:pass,
        firstname:firstname,
        lastname:lastname,
        gender:gender,
        dob:dob,
        add:add,
        mail:mail
      },
      success:function(data,status){
        readRecords();
      }

    });

	}
</script>

</body>

</html>