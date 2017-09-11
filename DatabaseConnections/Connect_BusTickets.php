<?php
	//Checking Session Values
	session_start();
	if(isset($_SESSION["UserName"]))
	{
		$USER = $_SESSION['UserName'];
		$UserId = $_SESSION['UserId'];
	}else{
		header("Location: Login.php");
	}

	//Including Connection File
	include_once('common/Connection.php');
	if ($conn->connect_error) {   		 
   		 die("Connection failed: " . $conn->connect_error);
	} 
	//Retrieving Records 
	$sql = "SELECT * FROM city";
	//$data= mysql_query($sql);
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {    		
    		$option .= '<option value = "'.$row['Cities'].'">'.$row['Cities'].'</option>';    	
    	}
	}

	//Getting Parameters of Search Bus Form
	if(isset($_POST["Search"]))
    { 
    	//Including Connection File   	
		include_once('common/Connection.php');
		if ($conn->connect_error) {   		 
	   		 die("Connection failed: " . $conn->connect_error);
		} 

		$Boarding = $_POST['Boarding'];
		$Dropping = $_POST['Dropping'];
		$JourneyDate = $_POST['JourneyDate'];
		//Getting Session Value of Journey Date
		session_start();
		$_SESSION["bookingDate"]=$JourneyDate;

		//Retrieving records From database
		$sql = "SELECT * FROM route where boardingAddress= '$Boarding' and droppingPoints='$Dropping'";		

	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {

	    //Creating Table To show Retieved Records
    	$tabledata .= '<table align="center" border="5" style="display:table;width:100%;margin-left:0px;">  
            <thead>
                <tr>
                <th> Bus Number </th>
                <th> Bus Operator </th>
                <th> Boarding Address </th>
                <th> Boarding Time </th>
                <th> Dropping Address </th>
                <th> Dropping Time </th>
                <th> Book Ticket(s) </th> 
            	</tr>
            </thead>
            <tbody>';
		while($row = $result->fetch_assoc()) {           
			$tabledata .= '<tr>
	                <td>'. $row["busNumber"] .'</td>
	                <td>'. $row["busOperator"].'</td>
	                <td>'. $row["boardingAddress"].'</td>
	                <td>'. $row["boardingTime"].'</td>
	                <td>'. $row["droppingPoints"].'</td>
	                <td>'. $row["droppingTime"].'</td>
	                <td> <form method="post"><input type="submit" value="'.$row["busNumber"].'" name="Reserve" style="height:40px;background-color:green"></form> </td>
            	</tr>';
		}
        $tabledata.='</tbody>
       </table>';
		}
	}
	//Creating Session and Redirecting to Bus Seat Layout
	if(isset($_POST["Reserve"]))
    {	
    	session_start();
	 	$_SESSION["busNumber"] = $_POST['Reserve'];
	 	header("Location: busLayout.php");
	}
?>