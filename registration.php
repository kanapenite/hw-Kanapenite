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
    <h1>Страница регистрации</h1>
    <form action="hello.php" method="spost">
        <p><label> Имя пользователя:</label> 
        <input type="text" name="login">
        </p>
        <p><label> Пароль:</label> 
        <input type="password" name="password">
        </p>
        </p>
         <p><button type="submit">Зарегистрироваться</button>
        </p>
    </form>
</body>
</html>