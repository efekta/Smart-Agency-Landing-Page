<?php
//Принимаем постовые данные
$whatever = $_POST['whatever'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
//Тут указываем на какой ящик посылать письмо
$to = "Ptashkina@outlook.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($mail)."<br />
Сообщение: ".htmlspecialchars($message)."";
// Отправляем письмо при помощи функции mail();
$headers = "From: smart.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: ../thanks.html');
exit();
?>
