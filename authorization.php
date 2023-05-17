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
</head>
<body>
<div class="one">
<h1>Страница авторизации</h1>
<?php
$hostname='localhost';
$username='Olga';
$password='5700';
$dbname='about_me_reg';

$connect=mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');
$selectAll=mysqli_query($connect, "SELECT * FROM registration");
$selectArray=mysqli_fetch_all($selectAll, MYSQLI_ASSOC);
if (isset($_POST['login']))
$_SESSION['session_username']=$_POST['login'];
$q=0;
if (isset($_POST['password']))
foreach($selectArray as $key){
if ($key['password']==md5($_POST['password']) && $key['login']==$_POST['login']){
$q++;
} else $q==0;
}
if ($q==1){
header("Location:hello.php");
} else echo 'Пройдите авторизацию или зарегистрируйтесь';
?>
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
<a href="index.php">Вернуться на главную страницу</a><br>
<a href="fact.php">fact.php</a>
<a href="bitrix.php">bitrix.php</a>
</div>
</body>
</html>
