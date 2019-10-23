<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];

$message = '<html><body style="font-family: sans-serif">';
$message .= '<div><b>Имя:</b> ' . $name . '</div>';
$message .= '<div><b>Телефон:</b> ' . $phone . '</div>';
$message .= '<div><b>UTM Source:</b> ' . $utm_source . '</div>';
$message .= '<div><b>UTM Medium:</b> ' . $utm_medium . '</div>';
$message .= '<div><b>UTM Campaign:</b> ' . $utm_campaign . '</div>';
$message .= '<div><b>UTM Content:</b> ' . $utm_content . '</div>';
$message .= '</body></html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: \"Школа SAY YES!\" <info@sayes.ru>\r\n";
$headers .= "X-Mailer: E-mail from sayes website \r\n";

mail('info@sayes.ru', 'Заявка на пробный урок с мобильного лэнда', $message, $headers);

header('Location: /thank-you.php');

exit;