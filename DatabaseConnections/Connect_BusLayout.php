<?php
  //Getting Session Values
  session_start();
  $UserId = $_SESSION['UserId'];
  $USER = $_SESSION['UserName'];
  $bookingDate = $_SESSION["bookingDate"];

  //Including Connection File
  include_once('common/Connection.php');
  //Checking Connection Error
  if ($conn->connect_error) {        
       die("Connection failed: " . $conn->connect_error);
  } 
  //Declaring Message Variable
  $message = '';
  //Checking Session Value and Retriving Records From Database
  if(isset($_SESSION["busNumber"]))
	{
		$busNumber = $_SESSION["busNumber"];
		$sql = "SELECT * FROM route where busNumber= '$busNumber'";		
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
	    	$row = $result->fetch_assoc();
	    	$busOperator = $row["busOperator"];		    	
	    	$boardingAddress = $row["boardingAddress"];
	    	$boardingTime = $row["boardingTime"];
	    	$droppingPoints = $row["droppingPoints"];
	    	$droppingTime = $row["droppingTime"];
  		}
      $sql = "SELECT price FROM bus where busNumber= '$busNumber'";   
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row["price"];         
      }
  }

  //Creating Seat Layout for all seats
  for($i = 1; $i <=37; $i++){
    $text = '';
          $text .= '<input type="checkbox"'; 
          $text .= 'name="seatNumber[]"';
          $text .= 'id="'.$i.'" value="'.$i.'"  />';
          $checkArray[$i] = $text;
  }

  //Checking Booked Seats on Bus Number and Booking Date
  $sql = "SELECT * FROM busLayout where busNumber= '$busNumber' and bookingDate='$bookingDate'";   
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $status = 1;
      while($row = $result->fetch_assoc()) {        
          $seatNumber = $row["seatNumber"];   
          $text = '';
          $text .= '<input type="checkbox"'; 
          if ($row['seatStatus'] == $status) {             
             $text .= ' checked="checked" disabled '; 
          }
          $text .= 'name="seatNumber[]"';
          $text .= 'id="'.$row["seatNumber"].'" value="'.$row["seatNumber"].'"  />';
          $checkArray[$row["seatNumber"]] = $text;
      }
  }

  //Inserting Booked Seat information in Database table 
  if(isset($_POST["BookSeat"]))
    {
      $SeatNumber = $_POST['seatNumber'];

      $SNumber = implode(',', $SeatNumber);

      if ($conn->connect_error) {
           alert("conn");
           die("Connection failed: " . $conn->connect_error);
      } 

      $seatStatus = '1';
      $uid = $UserId;
      
      //Variable to count total seats booked
      $numberOfSeats = 0;

      //Insetring Record For Each Booked Seat
      foreach ($SeatNumber as $seat) {
          //$stmt = "UPDATE busLayout SET seatStatus='1' WHERE busNumber='$busNumber' and seatNumber='$seat'";
          $stmt = "INSERT INTO busLayout (busNumber, seatNumber, seatStatus, userRegisterationId, bookingDate) VALUES ('$busNumber', '$seat', '$seatStatus', '$uid', '$bookingDate')";
          if ($conn->query($stmt) === TRUE) {
          } else {
            echo "Error: " . $stmt . "<br>" . $conn->error;
          }
          $numberOfSeats++;
      }
      //Calculating Total Price
      $total = $numberOfSeats*$price;
      $message .= "Bus Seat is Booked";
      $message .= " & Total Price is ".$total;
      //echo '<script language="javascript">';
	    //echo 'alert("message successfully sent")';
      //echo '</script>';
      $conn->close();
      //header("Location: busLayout.php");
    }
?>