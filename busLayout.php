<html>
  
  <head>
  
  	<title>
  		Home Page
  	</title>

  	 <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/busLayout.css">

     <?php include "DatabaseConnections/Connect_BusLayout.php" ?>

  </head>
  
  <body scroll="no">
  
    	<?php include 'header.php'; ?>
    	<?php include 'left.php'; ?>
 
    	<div class="Content_BusLayout" style="margin-left:10%">
 
     		<center><h1>Bus Seats Layout</h1></center>  		

      		<div style="margin-left: 10%;" class="TableDesign">
      			<table align="center" border="5" style="display:table;width:100%;margin-left:0px;">  
                
                <thead>
                    <tr>
                    <th> Bus Number </th>
                    <th> Bus Operator </th>
                    <th> Boarding Address </th>
                    <th> Boarding Time </th>
                    <th> Dropping Address </th>
                    <th> Dropping Time </th>
                    <th> Ticket Price </th>
                    <th> Date </th>
                	</tr>
                </thead>
                
                <tbody>
                	<tr>
                		<td>
                			<?php echo "$busNumber" ?> 
                		</td>
                		<td>
                			<?php echo "$busOperator" ?> 
                		</td>
                		<td>
                			<?php echo "$boardingAddress" ?> 
                		</td>
                		<td>
                			<?php echo "$boardingTime" ?> 
                		</td>
                		<td>
                			<?php echo "$droppingPoints" ?> 
                		</td>
                		<td>
                			<?php echo "$droppingTime" ?> 
                		</td>
                    <td>
                      <?php echo "$price" ?> 
                    </td>
                    <td>
                      <?php echo "$bookingDate" ?>
                    </td>
                	</tr>
                </tbody>
                
            </table>
    		</div>

        <br/><br/>

  			<div class ="seatContainer" >
        
          <form name="form1" method="post">
      				<?php include 'common/seatlayout_37.php'; ?>
              <input type="submit" value="Submit" name="BookSeat">
          </form>

        </div>

        <div style="float:right;width:400px;margin-top:100px;"> 
            <p><?php echo $message ?></p>
        </div>

    	</div>
  </body>
</html>