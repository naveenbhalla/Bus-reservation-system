<html>
	<head>
		<title>
			Home Page
		</title>
		
		<!-- Including Css File -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Including User_Feedback php file -->
		<?php include "DatabaseConnections/Connect_UserFeedback.php" ?>
	</head>
	<body scroll="no">

		<?php include 'header.php'; ?>
		<?php include 'left.php'; ?>

		<center><h1>User Feedback</h1></center>
		<div class="content_UserFeedback">
			<form name="FeedbackForm" method="POST">
				<table cellspacing="20px" cellpadding="10px">
					<tbody>
						<tr>
							<th>
								<font color="white">USER ID</font>
							</th>
							<td>
								<input type="text" id="UserName" name="UserName" value="<?php echo $UserId ?>" disabled>
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">Rating</font>
							</th>
							<td>
								<font color="white">
									<input type="radio" name="Rating" value="1">1
									<input type="radio" name="Rating" value="2">2
									<input type="radio" name="Rating" value="3">3
									<input type="radio" name="Rating" value="4">4
									<input type="radio" name="Rating" value="5" checked>5
								</font>
							</td>
						</tr>
						<tr>
							<th>
								<font color="white">Feedback</font>
							</th>
							<td>
								<textarea name="Feedback" rows="4" cols="20" style='resize:none;'>
								</textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit"  name="AddFeedback" style="width:60%;height:40px;font-size:20;">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
			<p><?php echo $message ?></p>
		</div>

	</body>
</html>