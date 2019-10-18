<?php //начало базы данных
if(!empty($_GET['name']) and !empty($_GET['email']) and !empty($_GET['text'])){
  // условие, что все поля заполнены
$name = $_GET['name'];
$email = $_GET['email'];
$taxt = $_GET['text'];
mail('nek.av@mail.ru', 'Тема письма','
Привет, меня зовут '.$name.'
Моя почта: '.$email.'
'.$text);
exit('Успешно отправлено');
}
else
 exit('Не все поля заполнены!');
 ?>