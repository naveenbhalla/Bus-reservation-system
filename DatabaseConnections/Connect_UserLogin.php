<?php

	//Getting parameters from User Login Form
    if(isset($_POST["Login"]))
    {
    	//Including Database Connection File
    	include 'common/Connection.php';

        $userName = $_POST["UserName"];
        $password = $_POST["Password"];

        //Generating an OTP
        $OTP = mt_rand(100000, 999999);

        //Putting OTP in session
        session_start();
        $_SESSION["OTP_Copy"] = $OTP;
       
        //Checking Database Connection
	    if ($conn->connect_error) {
	       // echo 'not connected';
	        die("Connection failed: " . $conn->connect_error);
	    }

	    //Matching Record From Database Table
	    $sql = "Select * from userRegisteration where userEmailId = '$userName' and Password='$password'";


	    $result = $conn->query($sql);

	    //Creating session on Successful Login
	    if ($result == TRUE) {

	    	$row = $result->fetch_assoc();

            //Generating Session
            session_start();
            $_SESSION["UserName"] = $row['userName'];
            $_SESSION["UserId"] = $row['userRegisterationId'];
	    	include "common/Email.php";
		    } else{
		        echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }

    $Otp = '1';
    $num = 0;
    $msg = '';    
    if(isset($_POST["OTPbtn"])){    	
        $Otp = $_POST["Verify_OTP"];
        session_start();
    if(strcmp($Otp,(string)$_SESSION["OTP_Copy"]) == $num && $Otp != '1'){
       header("Location: BusTickets.php");
    }else{
        $msg .= "OTP Don't Matches";
    }
}
 ?>