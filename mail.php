<?php
                  //first we leave this input field blank
                  $recipient = "jeremysosa1011@gmail.com";
                  //if user click the send button
                  if(isset($_POST['send'])){
                      //access user entered data
                     $recipient = "jeremysosa1011@gmail.com";
                     $message = $_POST['message'];
                     $sender = $_POST['email'];;
                     //if user leave empty field among one of them
                     if(empty($sender) || empty($message)){
                         ?>
               <!-- display an alert message if one of them field is empty -->
               <div class="alert alert-danger text-center">
                  <?php echo "All inputs are required!" ?>
               </div>
               <?php
                  }else{
                      // PHP function to send mail
                     if(mail($recipient, $message, $sender)){
                      ?>
               <!-- display a success message if once mail sent sucessfully -->
               <div class="alert alert-success text-center">
                  <?php echo "Your mail successfully sent to $recipient"?>
               </div>
               <?php
                  $recipient = "jeremysosa1011@gmail.com";
                  }else{
                   ?>
               <!-- display an alert message if somehow mail can't be sent -->
               <div class="alert alert-danger text-center">
                  <?php echo "Failed while sending your mail!" ?>
               </div>
               <?php
                  }
                  }
                  }
                  ?>