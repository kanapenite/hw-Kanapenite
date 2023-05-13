<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles3.css">
    <title>Document</title>
</head>
<body>
<div class="one">
<?php
session_start();
if(!isset($_SESSION["session_username"])){
    header("Location: authorization.php");
}
?>
    <div>
    <h1>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h1>
      <p><a href="logout.php">Выйти</a> из системы</p>
    </div>
<?php
if (isset($_SESSION['page']))
        {
            foreach($_SESSION["page"] as $value)
            {
                echo $value;
            }
            exit;}
?>
<a href="index.php">Вернуться на главную страницу</a><br>
</div>
</body>
</html>