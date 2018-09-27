
<?php
$emailErr ="";
if (isset($_POST['submit'])) {
  $from ="FROM:".$_POST['email'];
  $email= $_POST['email'];

   if (empty($_POST['email'])) {
      $emailErr = "Email is required";
    } else {
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }

      else {
      $to = "jeffreyefemena4@gmail.com";
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      mail($to,$subject,$message,$from);

      }

}

}
 ?>
