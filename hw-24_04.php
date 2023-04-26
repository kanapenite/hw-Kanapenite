<?php
echo '<b>1. Пользователь заходит на страницу. Вам необходимо <br>
сохранить куки со значением name = "User". После обновления страницы нам необходимо вывести <br>
на экран "Hello User" (Значение User берется из куки)</b><br>';

setcookie('login', 'user');
if(isset ($_COOKIE['login'])){
echo 'hello, '. $_COOKIE['login'];
}
echo'<br>';
echo'<br>';
?>



<?php
echo '<b>2. Создайте куки с логином посетителя и временем последнего захода. <br>
Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.</b><br>';
$name=$_GET['log'];
$last=isset($_COOKIE['last']);
setcookie('last', date('Y-m-d H:i:s'),time()+3600);
setcookie('login1',$name,time()+3600);
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
    <form action="">
        <input type="text" name="log">
        <input type="submit">
</form>
</body>
</html>
<?php
echo 'Ваш логин: '. $_COOKIE['login1'].'<br>';
echo 'Время последнего входа на сайт: '. $_COOKIE['last'];
echo'<br>';
echo'<br>';
?>


<?php
echo '<b> 3. Сделайте счетчик посещения сайта посетителем. <br>
Каждый раз, заходя на сайт, он должен видеть надпись: Вы посетили наш сайт % раз!.</b><br>';
if(isset($_COOKIE['count'])){
    $count=$_COOKIE['count'];
}else{
    $count=0;
}
$count++;
setcookie('count',$count);
echo 'Вы посетили наш сайт '. $count . ' раз!';
echo'<br>';
echo'<br>';
?>




<?php
echo '<b>1. Cделайте две страницы: index.php и hello.php.<br>
 //При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. <br>
 //При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!".</b><br>';
 session_start();
 $_SESSION['n']=$_GET['username'];
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
    <form action="">
    <label> Введите ваше имя: </label> 
        <input type="text" name="username">
        <input type="submit">
    <a href="hello.php">go to hello.php</a>
</form>
</body>
</html>
<?php
echo'<br>';
echo'<br>';
?>


<?php
echo '<b>2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время на экран.</b><br>';
session_start();
if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
} 
echo 'Время входа на сайт '.$_SESSION['time'].'<br>';
echo'<br>';
echo'<br>';
?>


<?php
echo '<b> 3. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.</b><br>';
session_start();
if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
} 
echo 'Время входа на сайт '.$_SESSION['time'].'<br>';
echo 'Вы зашои на сайт  '. time() - $_SESSION['time'] . 'сек. назад';
echo'<br>';
echo'<br>';
?>