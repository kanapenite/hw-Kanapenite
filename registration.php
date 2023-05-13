<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles3.css">
<?php
if (isset($_FILES['file']))
move_uploaded_file($_FILES['file']['tmp_name'],'foto/'.$_FILES['file']['name']);
?>
</head>
<body> 
<div class="one">
    <h1>Страница регистрации</h1>
    <form action="" method = "post" enctype="multipart/form-data">
        <p><label> Имя пользователя:
        <input type="text" name="login">
        </label> 
        </p>
        <p><label> Пароль:
        <input type="password" name="password">
        </label> 
        </p><label> Загрузите ваш аватар 
        <input type="file" name="file" accept="image/png,image/jpeg,image/bmp,image/gif">
        </label>
        </p>
         <p><button type="submit">Зарегистрироваться</button>
        </p>
        <a href="index.php">Вернуться на главную страницу</a><br>
    </form>
<?php

$hostname='localhost';
$username='Olga';
$password='5700';
$dbname='about_me_reg';

$connect= mysqli_connect($hostname, $username, $password, $dbname);
if(!empty($_POST['login']) && !empty($_POST['password'])){ //если поля не пустые
//if (isset($_POST['login'])) 
$l=htmlspecialchars($_POST['login']);
//if (isset($_POST['password']))
$p=htmlspecialchars($_POST['password']);
$a='<a href="hello.php">Перейти на страницу Hello</a>';
//if (isset($l))
$insert= "INSERT INTO registration (login, password) values ('$l', md5('$p'))";
$query=mysqli_query($connect,"SELECT * FROM registration WHERE login='".$l."'");
$numrows=mysqli_num_rows($query);
    if($numrows==0){ //если совпадений нет
        if (isset($insert))
        if(mysqli_query($connect, $insert)){
        echo '<b>Регистрация прошла успешно!</b> '. $a;
        }}
        else{
        echo 'Имя пользователя уже существует. Введите уникальное имя';  
        }}
        else{
    echo 'заполните все поля';}
 if (isset($l))
 $_SESSION['session_username']=$l;
 ?>
 </div>
</body>
</html>