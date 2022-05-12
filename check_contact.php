<?php

use JetBrains\PhpStorm\NoReturn;

session_start();
unset($_SESSION['success_mail']);

#[NoReturn] function redirect(): void
{
    header('Location: contacts.php');
    exit();
}

$user_name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$theme = htmlspecialchars(trim($_POST['theme']));
$message = htmlspecialchars(trim($_POST['message']));
$send_copy = htmlspecialchars(trim($_POST['send-copy']));

$_SESSION['user_name'] = $user_name;
$_SESSION['email'] = $email;
$_SESSION['theme'] = $theme;
$_SESSION['message'] = $message;

$subject = "=?utf-8?B?" . base64_encode($theme) . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";

$success_mail = mail("kamenik1@icloud.com", $subject, $message, $headers);
if ($success_mail) {
    $_SESSION['success_mail'] = true;
}
redirect();
