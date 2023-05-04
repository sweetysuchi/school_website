<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
  $to = "supriya.kumari1904@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = "New Scholarship Registration Request";
  $message = "Name: $name\nEmail: $email\nPhone: $phone";
  $headers = "From: $email";

  if(mail($to, $subject, $message, $headers)) {
    http_response_code(200); // send a success response code
  } else {
    http_response_code(500); // send an error response code
  }
} else {
  http_response_code(400); // send a bad request response code
}
?>
