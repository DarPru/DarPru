<?php
//Принимаем постовые данные
$name=$_POST['name'];
$email=$_POST['email'];
$umessage=$_POST['umessage'];
//Тут указываем на какой ящик посылать письмо
$to = "sinmws246@ivyandmarj.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Почта: ".htmlspecialchars($email)."<br />
 Сообщение: ".htmlspecialchars($umessage);
// Отправляем письмо при помощи функции mail();
$headers = "From: stastroi.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
exit();
?>