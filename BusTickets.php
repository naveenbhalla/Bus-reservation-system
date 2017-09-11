<?php include "DatabaseConnections/Connect_BusTickets.php" ?>
<html>
<head>
	<title>
		Home Page
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body scroll="no">

	<?php include 'header.php'; ?>
	<?php include 'left.php'; ?>

	<center style="margin-top:90px;"><h1>Bus Tickets</h1></center>

	<div class="content_BusTickets">
		<form method="POST" name="SearchForm" style="margin-left:30px;margin-bottom:0px;">
			<table cellspacing="20px" cellpadding="10px"> 
				<tbody>
					<tr>
						<th>
							<font color="white">Boarding Point</font>
						</th>
						<td>
							<select name="Boarding">
								<option>From</option>
								<?php echo $option; ?>
							</select>
						</td>
					</tr>
					<tr>
						<th>
							<font color="white">Dropping Point</font>
						</th>
						<td>
							<select name="Dropping">
								<option>To</option>
								<?php echo $option; ?>
							</select>
						</td>
					</tr>
					<tr>
						<th>
							<font color="white">Journey Date</font>
						</th>
						<td>
							<input type="date" name="JourneyDate" min="<?php echo date("Y-m-d"); ?>">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="Search"
							value="Search" style="width:100%;">
						</td>
					</tr>
				</tbody>
			</table>
	</form>
	</div>

	<br/><br/>

	<div class="TableData">
		<?php echo $tabledata; ?>
	</div> 
</body>
</html>