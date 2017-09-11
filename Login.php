<html>
	<head>
		<title>
			Home Page
		</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	    <?php include "DatabaseConnections/Connect_UserLogin.php" ?>

	     <script type="javascript">
	    	document.getElementsByClassName("content_OTP").style.display="none";
	    </script>
	</head>

	<body scroll="no" style="background-color:aliceblue;">
	
		<div id="header">
			<h1>Bus Reservation System</h1>
			<img src="images/logo.png">
			<pre>
				<?php echo 'Date : '.date("Y-m-d"); ?>
			</pre>
		</div>
	
		<center style="margin-top:90px;"><h1>Login Here</h1></center>
	
		<div class="RegisterBtn">
			<font color="red">New Registeration ?</font><br/><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button name="btnsign"> <a href="index.php" style="text-decoration: none;"><font color="white">Register Here</font></a></button>
		</div>

		<div class="content_Login" >
			 <form method="post">

			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			      <input id="email" type="text" class="form-control" name="UserName" placeholder="Email">
			    </div>

			    <br/><br/><br/>

			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			      <input id="password" type="password" class="form-control" name="Password" placeholder="Password">
			    </div>

			    <br/><br/><br/>

			    <button type="submit" class="btn btn-default" name="Login" value="Login" style="width:100%;background-color:aquamarine;">Login</button>

		  	</form>
		</div>

		<div class="content_OTP" >
			<p><?php echo $OTPMessage ?></p>
			<br/><br/>
			<?php echo $OTPForm ?>
			<br/>
			<?php echo $msg ?>
		</div>

	</body>
</html>