<?php include './header2.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Invoice</title>
        <link rel="stylesheet" type="text/css" href="./css/buy.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
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


                }
            }

    ?>
    <?php

$user = $_SESSION['username'];
$id = $_GET['id'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "efarm";
$con = new mysqli($hostname, $username, $password, $database);
$sql = "SELECT * FROM product where id='$id' ";
$stmt = $con->prepare($sql);
$stmt ->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0)
{



while($row = $result->fetch_assoc())
    {
        $seller= $row["seller"];
        $pname = $row["pname"];
        $price= $row["price"];
        $pphoto = $row["photo"];
        $id = $row["id"];


    }
}
?> 


       <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="widget-box">
                        <div class="widget-header widget-header-large">
                            <h3 class="widget-title grey lighter">
                            <i class="ace-icon fa fa-leaf green"></i>
						        Agorian Farm
					        </h3>
                            <div class="widget-toolbar no-border invoice-info">
                            <span class="invoice-info-label">Invoice:</span>
						    <span class="red"><?php echo $_GET['id']; ?></span>
                            <br>
						    <span class="invoice-info-label">Date:</span>
						    <span class="blue">11/12/2022</span>

                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main padding-24">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right ">
                                                <b> Agorian Farm </b>
                                            </div>
                                        </div>
                                        <div>
                                            <ul class="list-unstyled spaced">
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"> </i>Address
                                                </li>
                                                <li>
                                                    <i class="ace-icon fa fa-caret-right blue"> </i> Number
                                                </li>
                                                <li class="divider"></li>
                                                <li>
											        <i class="ace-icon fa fa-caret-right blue"></i>
											        Paymant Info
										        </li>
                                            </ul>
                                        </div>
                                        </div><!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                                    <b> <?php echo $_SESSION['username']; ?></b>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled spaced">
                                                    <li >
                                                        <i class="ace-icon fa fa-caret-right green"> </i> <?php echo $add; ?>
                                                    </li>
                                                    <li>
                                                        <i class="ace-icon fa fa-caret-right green"></i><?php echo $phn; ?>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
											            <i class="ace-icon fa fa-caret-right green"></i>
                                                        <?php echo $email ?>
										            </li>
                                                </ul>
                                            </div>
                                            </div><!-- /.col -->
						                    </div><!-- /.row -->
                                            <div class="space"></div>

                                            <div>
                                            <table class="table table-striped table-bordered">
								                <thead>
									                <tr>
										             <th class="center">#</th>
										             <th>Product</th>
										             
										             <th class="hidden-480">Photo</th>
										             <th>Total</th>
									                </tr>
								                </thead>

								                <tbody>
									                <tr>
										                <td class="center">1</td>

										                <td>
											            <?php echo $pname ?>
										                </td>
										                
										                <td class="hidden-480"> <img src=" <?php echo $pphoto ?>" alt="Avatar" style="width:150px;height:70px;"> </td>
										                <td></i> <?php echo $price ?></td>
									                </tr>

									                
									                 
								                </tbody>
							                </table>
                                            </div>
                                            <div class="hr hr8 hr-double hr-dotted"></div>
                                            <div class="row">
                                                <div class="col-sm-5 pull-right">
                                                <h4 class="pull-right">
									            Total amount :
									            <span class="red"> <?php echo $price; ?></span>
								                </h4>
                                                </div>
                                                <div class="col-sm-7 pull-left">Extra Information</div>
                                            </div>
                                            <div class="space-6"></div>
                                            <div class="well">
							                Thank you for choosing our products.
                                            We believe you will be satisfied by our services.
						                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="goback" style="position:absolute; left:50%;">
            <a class="btn btn-success" style="border: radius 15px; border:2px solid black ; " href="view.php"> Back</a>
        </div>
    </body>
</html>