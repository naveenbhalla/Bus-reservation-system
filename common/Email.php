<?php
      $to = "naveenbhalla19@gmail.com";
      $subject = "OTP Verification";

      $message = "<b>Your Bus Reservation Varification Code is:</b>";
      $message .= "    ".$OTP;
      
      $header = "From:Bus_Reservation_System@gmail.com \r\n";
      // $header .= "Cc:afgh@somedomain.com \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      
      $retval = mail ($to,$subject,$message,$header);

      $OTPMessage .= '';
      $OTPForm .= '';
      if( $retval == true ) {
         $OTPMessage.="OTP Has been Sent Successfully...";

         $OTPForm .= "<form name='OTPFORM' method='POST'>";
         $OTPForm .= "<input type='number' name='Verify_OTP' maxlength='6' style='height:40px'>";
         $OTPForm .= "&nbsp;&nbsp;<input type='submit' name='OTPbtn' value='Enter' style='background-color:green;height:40px;font-size:20px;'>";
         $OTPFORM .= "</form>";

      }else {
         $OTPMessage.="OTP can't be Sent Successfully...";
      }
?>