<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $time=date('H');
    if ($time<10 || $time>22) 
    { echo'<link rel="stylesheet" href="styles/styles.css">';}
    else{
    echo '<link rel="stylesheet" href="styles/styles1.css">';}
    ?>
    <title> О себе</title>
</head>
<body>        
    <div class="container_about_me">
        <div class="header"> 
            О СЕБЕ <br>
            <a href="table.html" title="Скорее нажми, там интересно!" style="color: black;">Таблица Менделеева</a>
        </div>  
        <div class="photo"></div>
        <div class="name"> 
             Канапените Ольга</div>   
        <div class="info"> 
              Работаю инженером-проектировщиком, воспитываем <br>с мужем 
              трехлетнюю дочь, люблю путешествия, прогулки<br>по Ленинскому, 
             посиделки с друзьями и сладкое </div>  
        <div class="study"> 
               На занятии все понравилось, кроме моей черепашьей<br>
               скорости при выполнении заданий :) 
        </div> 
        </div>;
    </div>
    <div class="container_main">
        <div class="animals"><strong>Животные</strong>
        </div>
        <div class="container_all">
        <div class="container_one">
             <div class="img_one"></div>
             <div class="text_one"> <strong>Слоны</strong> — семейство класса млекопитающих из отряда хоботных. 
                В настоящее время к этому семейству относятся 3 ныне живущих вида. 
                Африканские саванные слоны — наиболее крупные наземные млекопитающие.</div>
        </div>
        <div class="container_two">
             <div class="img_two"></div>
            <div class="text_two"><strong>Лоси</strong> — род парнокопытных млекопитающих, самые крупные 
                представители семейства оленевых. Включает 2 вида: европейский лось и американский лось, которые имеют разное число 
                хромосом.</div>
        </div>
        <div class="container_three">
            <div class="img_three"></div>
            <div class="text_three"><strong>Тигр</strong> — хищное млекопитающее семейства кошачьих, один из пяти
                 видов рода пантер, принадлежащего к подсемейству больших кошек. </div>
        </div>
        <div class="container_four">
            <div class="img_four"></div>
            <div class="text_four"><strong>Енот</strong> — род хищных млекопитающих семейства енотовых. Представители рода — обитатели Америки.
                 На территории Евразии и, в частности, в России интродуцирован единственный вид — енот-полоскун.</div>
        </div>
        </div><br>
    </div>
    <div class="container_greed">
        <div class="films"><strong>Фильмы</strong></div>
        <div class="one">
            <div class="img_greed_one"></div>
             <div class="text_greed_one"> <strong>Форрест Гамп (1994)</strong> - Полувековая история США глазами чудака из Алабамы. Абсолютная классика Роберта 
                Земекиса с Томом Хэнксом</div>
        </div>
        <div class="two">
            <div class="img_greed_two"></div>
            <div class="text_greed_two"> <strong>Эрнест и Селестина: Приключения мышки и медведя (2012)</strong>
           - Бесстрашную мышку и голодного медведя связала необычная дружба. Нежный акварельный мультфильм по книжной серии</div>
        </div>        
        <div class="three">
            <div class="img_greed_three"></div>
            <div class="text_greed_three"> <strong>1+1 (2011)</strong>
           -комедийная драма, основанная на реальных событиях, об успешном аристократе Филиппе, который в результате несчастного случая оказывается в инвалидном кресле и берёт себе 
           в качестве помощника чернокожего, бывшего мелкого правонарушителя — Дрисса.</div>
        </div>  
        <div class="four">
            <div class="img_greed_four"></div>
            <div class="text_greed_four"> <strong>Поймай меня, если сможешь</strong>
            — американский художественный фильм в жанре детективной трагикомедии, 
            поставленный режиссёром Стивеном Спилбергом по книге, повествующей о якобы реальных событиях из жизни Фрэнка Абигнейла</div>
        </div>  
    </div>
</body>
</html>