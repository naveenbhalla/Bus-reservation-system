<?php
    //Getting Session Value
	session_start();
	$USER = $_SESSION['UserName'];

    //Getting Add Bus Form values
    if(isset($_POST["AddBus"]))
    {

        include('common/Connection.php');
        $BusNumber = $_POST['BusNumber'];
        $BusOperator = $_POST['BusOperator'];
        $BoardingAddress = $_POST['BoardingAddress'];
        $BoardingTime = $_POST['BoardingTime'];
        $DroppingAddress = $_POST['DroppingAddress'];
        $DroppingTime = $_POST['DroppingTime'];
        $Distance = $_POST['Distance'];
    
        //Checking Connection
    	if ($conn->connect_error) {
       		 alert("conn");
       		 die("Connection failed: " . $conn->connect_error);
    	} 

        //Inserting Values
    	$stmt = $conn->prepare("INSERT INTO `route` (`busNumber`, `busOperator`, `boardingAddress`, `boardingTime`, `droppingPoints`, `droppingTime`, `distance`) VALUES (?, ?, ?, ?, ?, ?, ?)");

	    $stmt->bind_param("ssssssi", $BusNumber, $BusOperator, $BoardingAddress,$BoardingTime,$DroppingAddress,$DroppingTime,$Distance);

	    $stmt->execute();

	    $message = "Bus Service is added";

	    $stmt->close();


	    $conn->close();
    }
?>