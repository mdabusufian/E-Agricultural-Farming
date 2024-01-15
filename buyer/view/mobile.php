<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mobile Banking</title>
	<link rel="stylesheet" type="text/css" href="../model/123.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="../../JS/login.js"></script>
</head>
<body>
	<?php include 'header.php';?>

<div class="already" style=" background-color : #98FB98; ">


			<hr class="new1">
    <center>
        <h1 style="text-align:center;"> MOBILE BANKING </h1>
        <hr class="new1">
    </center>
</div>


<form name="login" action="../controller/donate.php" autocomplete="off" onsubmit="return validateForm()" method="POST">
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>	
    <table class="w3-table" border="2" align="center">
			<thead>
   			<tr class="w3-green">
     		<th > <b>Donor Name </b></th>
     		<th > <center><?php echo $_SESSION['username']?></center>
     		</th>
   			</tr>
   			</thead>
 			<tbody>
  			<tr>
    		<td> <b>Method </b> </td>
    		<td> <select name="method" class="form-control" value="" >
    		<option value="None"> None</option>
    		<option value="Bkash">Bkash</option>
    		<option value="Rocket">Rocket</option>
    		<option value="Nagad">Nagad</option>
  			</select>
              <span id="message" class="text-danger font-weight-bold"></span>
  			</td>
    		</tr>
    		<tr>
    		<td>
    			<b>Account number</b>	
    		</td>
    		<td>
    			<center><input type="tel" class=" form-control" name ="phn" value=""></center>
                <span id="message2" class="text-danger font-weight-bold"></span>
    		</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Ammount</b>
    			</td>
    			<td>
    				<center><input type="number" class=" form-control" name ="amnt" value=""></center>
                    <span id="message3" class="text-danger font-weight-bold"></span>
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Identity</b>
    			</td>
    			<td >
    				<select class="col-sm-6" style="text-align:center ;border-radius:5px; " name="identity" value="" >
    				<option value="show"> Show</option>
    				<option value="anonymous">Anonymous</option>
  					</select>
    			</td>
    		</tr>
		</table>

		<br>
		<br>

		<p align="center"><input type="submit" class=" btn-primary " name="submit" value="donate"></p>
	

	
    </form>
</body>
</html>