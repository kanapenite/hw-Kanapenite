<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Добро пожаловать!<br>
    Последняя посещенная страница:
    <?php
    if (isset($_COOKIE['lastVisited'])){
echo  $_COOKIE['lastVisited'];
    }
    if (isset($_COOKIE['lastVisited1'])){
        echo  $_COOKIE['lastVisited1'];
            }
?>
</body>
</html>