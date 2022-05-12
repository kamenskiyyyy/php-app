<?php
$page_title = "Главная страница";
require_once("components/header.php");
?>

<h1><?= $page_title ?></h1>

<?php
    $message = "Сообщение";
    $to = "kamenik1@icloud.com";
    $from = "noreply@edu.just-study.ru";
    $subject = "Тестовое письмо от php";

    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

?>

<?php
require('components/footer.php');
?>



