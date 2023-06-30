<?php
require('./admin/config.php');

if (isset($_POST['send_web_message'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (empty($name) || empty($email) || empty($department) || empty($phone) || empty($subject) || empty($message)) {
        header('Location: contact.php?error=All fileds are required!');
        exit();
    }

    $sql = "INSERT INTO `webmessages` (`name`, `email`, `department`, `phone`, `subject`, `message`) VALUES ('$name', '$email', '$department', '$phone', '$subject', '$message')";
    if (mysqli_query($conn, $sql)) {
        header('Location: contact.php?success=Message sent success!');
    } else {
        header('Location: contact.php?error=Internal Server Error');
    }
}
