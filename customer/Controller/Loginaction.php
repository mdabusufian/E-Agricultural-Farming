<?php
		$hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "efarm";

    	$con = new mysqli($hostname, $username, $password, $database);

		if ($_SERVER['REQUEST_METHOD'] === 'POST')    

        {

         



            $user = $_POST["username"] ;

            $pass = $_POST["pass"];
            $Type = "customer";

        if (empty($user) || empty($pass))
        {
             $message = "Please Fill All The Filed Properly ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
        }

        else
        {
           

            $sql = "SELECT * FROM registration WHERE username='$user' ";

            $stmt = $con->prepare($sql);



            $stmt->execute();

            $result = $stmt->get_result();

           

            $data=$result->fetch_assoc();

       



            if($data)

            {

                $sql1 = "SELECT * FROM registration WHERE username='$user' and pass='$pass' and Type = '$Type' ";

            $stmt1 = $con->prepare($sql1);



            $stmt1->execute();

            $res = $stmt1->get_result();

           

            $data1=$res->fetch_assoc();

            if ($data1) 
            {
             session_start();
            $_SESSION['username'] =  $_POST["username"] ;
            $isset=true;



            if($isset){
            $_SESSION['username'] = $user;
            setcookie("username",$user, time()+ 3600);
            echo "<script>window.open('../view/Home.php', '_self')</script>";
            }
            }
            else
            {
                $message = "Password error or Seller not found  ";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
            }

            

            }

            else

            {

                $message = "Username not found !!! Check your submission ";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";

            }

    }
 }

?>