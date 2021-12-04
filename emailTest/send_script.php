<?php
if (isset($_POST['send_message_btn'])) {
    $name = $_POST['name'];
    $email = $_REQUEST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "<html>
  <head>
  	<title>From Common Grounds</title>
  </head>
  <body>
  	<h1>" . $subject . "</h1>
  	<p>".$msg."</p>
  </body>
  </html>";
    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent";
    }else{
        echo "Failed to send email. Please try again later";
    }
}
?>