<?php

include './header.php';

?>
<!DOCTYPE html>
<html>

<head>
  <title>Donations</title>
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
    <h1 class="text-primary text-bold text-center">All donations are shown bellow</h1>
    <div class="d-flex justify-content-end">
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

$sql="SELECT * FROM donation ";
$result = mysqli_query($con,$sql);

echo "<table class= 'table table-bordered table-striped'>
<tr>
<th>NO.</th>
<th>Number</th>
<th>Method</th>
<th>Identity</th>
<th>Amount</th>
 </tr>";
if (mysqli_num_rows($result) > 0)
            {
              $number =1;
              $var2=0;
while($row = mysqli_fetch_array($result)) {
  
  echo "<tr>";
  echo "<td>" . $number . "</td>";
  echo "<td>" . $row['number'] . "</td>";
  echo "<td>" . $row['method'] . "</td>";
  echo "<td>" . $row['identity'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
  $number++;
  $var1 = $row['amount'];
  $var2 = $var2 + $var1;
}

echo "</table>";
            }
?>
    
    	
    <div class="col-sm-5 pull-right">
                                                <h4 class="pull-right">
									            Total amount :
									            <span class="red"> <?php echo $var2; ?></span>
								                </h4>
                                                </div>
  </div>
</div>
</div>



</body>

</html>