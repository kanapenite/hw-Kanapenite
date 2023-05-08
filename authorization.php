<?php
session_start();
setcookie(session_name(),session_id());
$arr = [
    ['login'=>'olga', 'password'=>'321'],
    ['login'=>'anna', 'password'=>'111'],
    ['login'=>'alex', 'password'=>'444']
]; 
$q=0;
if (isset($_POST['password']))
foreach($arr as $key){
if ($key['password']==$_POST['password'] && $key['login']==$_POST['login']){
$q++;
} else $q==0;
}
if ($q==1){
header("Location:hello.php");
} else echo 'Пройдите авторизацию или зарегистрируйтесь';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<h1>Страница авторизации</h1>
    <form action="" method="post">
        <p><label> Имя пользователя:</label> 
        <input type="text" name="login">
        </p>
        <p><label> Пароль:</label> 
        <input type="password" name="password">
        </p>
        </p>
         <p><button type="submit">Авторизироваться</button>
        </p>
    </form>
<a href="registration.php">Зарегистрироваться</a><br>
<a href="fact.php">fact.php</a>
<a href="bitrix.php">bitrix.php</a>
</body>
</html>