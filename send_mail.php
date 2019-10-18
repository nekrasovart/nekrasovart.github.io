<?php //начало базы данных для отправки почты
if(!empty($_GET['name']) and !empty($_GET['email']) and !empty($_GET['text']) and !empty($_GET['file'])){
  // условие, что все поля заполнены
$name = $_GET['name'];
$email = $_GET['email'];
$text = $_GET['text'];
$file = $_GET['file'];
mail('nek.av@mail.ru', 'Тема письма','
Привет, меня зовут '.$name.'
Моя почта: '.$email.'
'.$text. ''.$file);
exit('Успешно отправлено');
}
else
 exit('Не все поля заполнены!');
 ?>