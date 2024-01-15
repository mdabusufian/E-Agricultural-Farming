<?php

include './header.php';

?>

<!DOCTYPE html>
<html>

<head>
  <title>EditProfie</title>


  <style type="text/css">
    
    body {
      background-color: #F0F8FF;
    }
    .picture{
      position:absolute;
      left: 120%;
      top: 25%;
    }
  </style>
</head>

<body>
<div class="already" style=" background-color : #98FB98; ">


<hr class="new1">
    <center>
        <h1 style="text-align:center;"> <?php echo $_SESSION['username']; ?>'s Profile </h1>
        <hr class="new1">
    </center>

</div>
   <?php

$uname = $_SESSION['username'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";



$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM registration where username = '$uname'";


$stmt = $con->prepare($sql);
$stmt ->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{



while($row = $result->fetch_assoc())
{
$fname = $row['fname'];
$lname= $row['lname'];
$dob= $row["dob"];
$photo = $row["photo"];
$gender= $row["gender"];
$add= $row["address"];
$email= $row["email"];
$phn= $row["phn"];
$prlink= $row["prlink"];
$pass = $row ['pass'];


}
}

?>

<form action="../Controller/editaction.php" method="POST">


              <div class=" text " style=" position: absolute; top: 35%; right: 35%; width: 400px;  height: 120px ;">
                
             <b> First Name :  </b>
             
             <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>"> 
   			     <b> Last Name :  </b>
             
             <input class="form-control" type="text" name="lname" value="<?php echo $lname; ?>">


             <b> Password :  </b>
             
             <input class="form-control" type="text" name="pass" value="<?php echo $pass; ?>"> 
             <b> Date of birth :  </b>
             
             <input class="form-control" type="date" name="dob" value="<?php echo $dob; ?>"> 
              <b> Gender :  </b>
             
             <select name="gender" class="form-control" value="" >
            <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
            <option value="Female">Female</option>
             <option value="Male">Male</option>
             <option value="Other">Other</option>
           </select>

             <b> Phone Number : </b>
              <input type="text" class="form-control" name="phn" value="<?php echo $phn; ?>">
             

             <b> Email : </b>
             <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
             
             <b> Address : </b>
              <input type="text" class="form-control" name="add" value="<?php echo $add; ?>">
            
             <br> <br>

             <div class="picture">
             <?php echo" <image src ='"; echo $photo; echo"' alt='Avatar' style='width:300px;height:300px;''>";  ?>
             <input type="file" name="photo" class="form-control">
             </div>


      <p><input class="btn-primary" style="display:block;" name="click" type="submit" value="update"></p>

       </div>


  </form>






</body>

</html>