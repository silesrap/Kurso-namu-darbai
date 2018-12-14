<?php
$name = trim(addslashes($_POST['name']));
$phone = trim(addslashes($_POST['phone']));
$email = trim(addslashes($_POST['email']));
$message = trim(addslashes($_POST['message']));

if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $from = "$email";
    $to = "laimonas.sk@gmail.com";
    $subject = "Nauja zinute";
    $author = "Nuo: $name, $phone, $email";
    $zinute = htmlspecialchars($message);
    mail($to, $subject, $author, $zinute, $from);
    header("location: ../thankyou.php");
  }
}
include 'db.php';
