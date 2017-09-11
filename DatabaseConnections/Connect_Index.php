<?php
    //Getting Parameters From Add User Form
    if(isset($_POST["AddUser"]))
    {
        //Including Database Connection Class
        include('common/Connection.php');
        $UserName = $_POST['UserName'];
        $EmailId = $_POST['EmailId'];
        $Password = $_POST['Password'];
        $MobileNumber = $_POST['MobileNumber'];
        $City = $_POST['City'];
        $Pincode = $_POST['Pincode'];        
    
        //Checking Database Connection
    	if ($conn->connect_error) 
    	{
       		 echo "<script>alert('conn')</script";
       		 die("Connection failed: " . $conn->connect_error);
    	} 

        //Inserting New Record To Database
	    $stmt = $conn->prepare("INSERT INTO userRegisteration(userName, userEmailId, Password , mobileNumber, city, pincode) VALUES (?,?,?,?,?,?)");

	    $stmt->bind_param("sssssi", $UserName, $EmailId, $Password ,$MobileNumber,$City,$Pincode);

	    $stmt->execute();

        //Showing Success Message 
	    $message .= "You Are Registered Successfully";

	    $stmt->close();

	    $conn->close();
	}
?>
