<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';
if (isset($_FILES['file']))
move_uploaded_file($_FILES['file']['tmp_name'],'foto/'.$_FILES['file']['name']);
    ?>
</head>
<body> 
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
        <input type="file" name="file">
        </label>
        </p>
         <p><button type="submit">Зарегистрироваться</button>
        </p>
    </form>
</body>
</html>

