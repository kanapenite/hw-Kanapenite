<?php
echo 'Слайд 15 задание 4<br> ';
//Создайте форму генерации ссылки с параметром:<br>
//-Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4<br>
//-При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , <br>
//где 3 – это номер выбранной лабораторной работы.<br>
$l = isset($_GET['l']) ? $_GET['l'] : 1 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <select name = "l" id = "">
        <option value="1">Лаб1</option>
        <option value="2">Лаб2</option>
        <option value="3">Лаб3</option>
        <option value="4">Лаб4</option>
</select>
<button type="submit">Send!</button>
</form>
<?php
print_r($_GET);
//$l=$_GET['l'];
echo'<br>';
?>
<a href="index.php?l=<?echo $l;?>"> ссылка </a>
</body>
</html> 
<?php
echo'<br>';
echo'<br>';

echo 'Слайд 16 задание 1 <br>';
//Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
//*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label> Comment
    <input type="text" name="comment">
    <label> Login
    <input type="text" name="login" > 
    <button type="submit">Send!</button>
</body>
</html> 
<?php
$to='\OpenServer\userdata\temp\email';
$subject='Message';
$message='Комментарий '.$_POST['comment'].' Логин '.$_POST['login'];
mail($to, $subject,$message);
echo '<br>';
?>