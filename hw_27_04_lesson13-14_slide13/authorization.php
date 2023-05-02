<?php
$last=$_GET['last1'];
$last=$_GET['last'];
setcookie('lastvisited', $last);
setcookie('lastvisited1', $last1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    function theme(){
        $time=date('H');
        if ($time>10 and $time<22) 
    { echo'<link rel="stylesheet" href="styles/styles.css">';}
    else{
    echo '<link rel="stylesheet" href="styles/styles1.css">';}
    }
    theme();
    ?>
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
    <?php 
    //  $pass=$_POST["password"];
    //  $_POST["password"]=md5($pass);
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
}else echo 'Введите верные данные или ';
?>
<a href="registration.php">зарегистрируйтесь</a><br>

<!-- <a href="https://www.1c-bitrix.ru/"  style="color: darkolivegreen;" >1c-bitrix</a>
<a href="https://fact.digital/" style="color: darkolivegreen;" >fact.digital</a> -->


<!-- <form action="https://www.1c-bitrix.ru/" method="get">
        <button name="last">1c-bitrix</button>
    <form action="https://fact.digital/" method="get">
        <button name="last1">fact.digital</button> -->
</body>
</html>