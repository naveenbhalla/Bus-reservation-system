<?php include "DatabaseConnections/Connect_AddBus.php" ?>
<html>
<head>
	<title>
		Home Page
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body scroll="no">
	<?php include 'header.php'; ?>
	<?php include 'left.php'; ?>
	<center><h1>User Registeration</h1></center>
	<div class="content_AddBus" >
		<form name="form1" method="post">
		<table cellpadding="10px" cellspacing="10px">
			<tbody>
				<tr>
					<th>
						<font color="white">Bus Number</font>
					</th>
					<td>
						<input type="text" name="BusNumber" placeholder="XX09GH6788" required>
					</td>
				</tr>
				<tr>
					<th>
						<font color="white">Bus Operator</font>
					</th>
					<td>
						<input type="text" name="BusOperator" placeholder="ABC Travels" required>
					</td>
				</tr>
				<tr>
					<th>
						<font color="white">Boarding Address</font>
					</th>
					<td>
						<input type="text" name="BoardingAddress" placeholder="From" required>
					</td>
				</tr>
				<tr>
					<th>
						<font color="white">Boarding Time</font>
					</th>
					<td>
						<input type="time" name="BoardingTime" placeholder="00:00" required>
					</td>
				</tr>
				<tr>
					<th>
						<font color="white">Dropping Address</font>
					</th>
					<td>
						<input type="text" name="DroppingAddress" placeholder="To" required>
					</td>
				</tr>
				<tr>
					<th>
						<font color="white">Dropping Time</font>
					</th>
					<td>
						<input type="time" name="DroppingTime" placeholder="00:00" required>
					</td>
				</tr>
				<tr>
				<tr>
					<th>
						<font color="white">Distance</font>
					</th>
					<td>
						<input type="number" name="Distance" placeholder="KiloMeters" required>
					</td>
				</tr>
					<td colspan="2" align="center">
						<input type="submit"  name="AddBus" style="width:60%;height:40px;font-size:20;">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<br/>
	<br/>
	<!-- Message For Successful Bus Addition -->
	<div style="align-text:center;">
		<?php echo $message ?>
	</div>
	</div>
</body>
</html>