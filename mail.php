<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$updates = $_POST['updates'];
$formphone = $_POST['formphone'];
header('Content-Type: application/json');
if ($name === '') {
    print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
    exit();
}
if ($email === '') {
    print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
    exit();
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
        exit();
    }
}
if ($subject === '') {
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}
if ($message === '') {
    print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
    exit();
}
if(isset( $_POST['updates']))
if ($formphone === '') {
    print json_encode(array('message' => 'Phone number cannot be empty', 'code' => 0));
    exit();
}





$content="From: $name \nEmail: $email \nMessage: $message \nPhone number: $formphone\nUpdates (if true - want/if false - don't want): $updates";
$recipient = "info@waterviewlandscaping.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();


?>
