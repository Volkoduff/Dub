<?php
header("Content-Type: text/html; charset=utf-8");
$email = htmlspecialchars($_POST["email"]);
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
$text = htmlspecialchars($_POST["text"]);

$check = is_array($_POST['check']) ? $_POST['check'] : array();
$check = implode (', ', $check );

$radio = htmlspecialchars($_POST["radio"]);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
$myemail = "vakovalkin@yandex.ru"; // e-mail администратора


// Отправка письма администратору сайта

$tema = "Сообщение от заказчика ToDub Studio";
$message_to_myemail = "Сообщение:
<br><br>
Имя заказчика: $name<br>
E-mail: $email<br>
Текст сообщения: $text<br>
";

mail($myemail, $tema, $message_to_myemail, "From: ToDub Studio <vakovalkin@yandex.ru> \r\n Reply-To: vakovalkin@yandex.ru \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );
?>