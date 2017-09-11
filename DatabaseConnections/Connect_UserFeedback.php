<?php
    //Retrieving Session Values
	session_start();
	$USER = $_SESSION['UserName'];
    $UserId = $_SESSION['UserId'];

    //Retrieving parameters from FeedbackForm
    if(isset($_POST["AddFeedback"]))
    {
        //Including Connection File
        include('common/Connection.php');
        $UserName = $_POST['UserName'];
        $Rating = $_POST['Rating'];
        $Feedback = $_POST['Feedback'];
        
        //Checking Database Connection
    	if ($conn->connect_error) {
       		 alert("conn");
       		 die("Connection failed: " . $conn->connect_error);
    	} 

        //Inserting Record to Feedback Database Table
    	$stmt = $conn->prepare("INSERT INTO feedback (userRegisterationId, rating, feedbackDetail, feedbackDate) VALUES (?, ?, ?, ?)");

        //Setting Feedback date to current Date
    	$FeedbackDate = date("Y-m-d");

	    $stmt->bind_param("iiss", $UserName, $Rating, $Feedback,$FeedbackDate);

	    $stmt->execute();

	    $message = "Thanks For the Feedback";

	    $stmt->close();

	    $conn->close();
    }
?>