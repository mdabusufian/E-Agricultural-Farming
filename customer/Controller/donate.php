<?php

		if ($_SERVER['REQUEST_METHOD'] === "POST")
			{

            
				$method = $_POST['method'];
				$phn = $_POST['phn'];
				$amnt = $_POST['amnt'];
				$identity = $_POST['identity'];

				
						$method = validate($method);
						$phn = validate ($phn);
						$amnt = validate ($amnt);
						$identity = validate ($identity);
						
                        $hostname = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "efarm";

                         $con = new mysqli($hostname, $username, $password, $database);
                           $sql = "INSERT INTO `donation`( `amount`, `number`, `method`, `identity`) VALUES ('$amnt','$phn','$method','$identity')"; 
                           $stmt = $con->query($sql);

						if ($stmt)
							{
                                $message = "Donating Successful.....!!!";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/Home.php';</script>";
							} 
						else
							{
								
                                $message = "Error Donating......!!!!!";
                        echo "<script type='text/javascript'>alert('$message');window.location = '../view/join.php';</script>";
							}

					}



			
			function validate($data)
			{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
	?>