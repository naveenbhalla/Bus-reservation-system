<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "naveenbhalla19@gmail.com";
         $subject = "This is subject";
         
         $OTP = mt_rand(100000, 999999);

         $message = "<b>Your Bus Reservation Varification Code is:</b>";
         $message .= "    ".$OTP;
         
         $header = "From:B_R_S@gmail.com \r\n";
         // $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>