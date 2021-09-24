<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$product = $_POST['product'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$mail = htmlspecialchars($mail);
$product = htmlspecialchars($product);

$name = urldecode($name);
$phone = urldecode($phone);
$mail = urldecode($mail);
$product = urldecode($product);

$name = trim($name);
$phone = trim($phone);
$mail = trim($mail);
$product = trim($product);

if (mail("example2@mail.ru", "Заявка на покупку с сайта", "ФИО:".$name.". Телефон:".$phone.". E-mail: ".$mail." Название продукта:".$product.". ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>