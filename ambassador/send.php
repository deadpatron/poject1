<?php

$userName = $_POST['user-name'];
$userTel = $_POST['user-tel'];
$userMessage = $_POST['user-message'];

$userName = htmlspecialchars($userName);
$userTel = htmlspecialchars($userTel);
$userMessage = htmlspecialchars($userMessage);

$userName = urldecode($userName);
$userTel = urldecode($userTel);
$userMessage = urldecode($userMessage);

$userName = trim($userName);
$userTel = trim($userTel);
$userMessage = trim($userMessage);

if (mail("deadpatron@gmail.com", "Заявка с сайта", "ФИО:".$userName.". Telephone: ".$userTel." Сообщение: ".$userMessage,"From: info@swt.ru \r\n")) {
    echo "Сообщение отправлено";
} else { 
    echo "При отправке сообщения возникли ошибки";
    }

?>