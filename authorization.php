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
foreach($arr as $key){
    if ($key['password']==$_POST['password'] && $key['login']==$_POST['login']){
   $q++;
} else $q==0;
}
if ($q==1){
   header("Location:hello.php");
}else echo 'Введите верные данные или ';
?>
<a href="registration.php">зарегистрируйтесь</a>
</body>
</html>