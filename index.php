<html>
	<head>
		
		<title>
			Home Page
		</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">

		<?php include "DatabaseConnections/index.php" ?>

	</head>

	<body scroll="no">
	
		<div id="header">
			<h1>Bus Reservation System</h1>
			<img src="images/logo.png">
			<pre>
				<?php echo 'Date : '.date("Y-m-d"); ?>
			</pre>
		</div>

		<center><h1>User Registeration</h1></center>
		
		<div class="SigninBtn" style="float:right;">
			<font color="red">Already Have Account ?</font><br/><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button name="btnsign" > <a href="Login.php" style="text-decoration: none;"><font color="white">Sign IN</font></a></button>
		</div>
		
		<div class="content_Index" >
			<form name="form1" method="post">
				<table cellpadding="10px" cellspacing="10px">
					<tbody>
						<tr>
							<th>
								<font color="white">USER NAME</font>
							</th>
							<td>
								<input type="text" name="UserName" placeholder="User Name">
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">Email-Id</font>
							</th>
							<td>
								<input type="email" name="EmailId" placeholder="abc@xyz.com">
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">Password</font>
							</th>
							<td>
								<input type="password" name="Password" placeholder="*********">
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">Mobile Number</font>
							</th>
							<td>
								<input type="number"  maxlength="10" name="MobileNumber" placeholder="999******">
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">City</font>
							</th>
							<td>
								<input type="text" name="City" placeholder="City">
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">Pincode<font color="white">
							</th>
							<td>
								<input type="number" name="Pincode" placeholder="Pincode">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit"  name="AddUser" value="Register" style="width:60%;height:40px;font-size:20;">
							</td>
						</tr>
					</tbody>
				</table>
			</form>

		<br/><br/>
		<!-- <div>
			<p><font size="8"><?php echo $message; ?></font></p>
		</div> -->
	  </div>
	</body>
</html>