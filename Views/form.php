<?php

  //Get POST data and store values in PHP variables
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_post = $_POST['user_post'];

  $destiny = "pablo.fonsecam@outlook.com";
  $about = "User post from https://pablofonseca-dev.github.io/professional-website/";

  $message = "Name: " . $user_name . "\r\n";
  $message .= "E-Mail: " . $user_email . "\r\n";
  $message .= "Post: " . $user_post . "\r\n";

  $from = "From: " . $user_email;

  mail($destiny, $about, $message, $from);

  header("Location:../index.php?i=ok");

?>
