<?php
//1 10/04/23
echo '1 Дан массив с элементами 50, 45, 40, 35, 30.
Найдите сумму элементов этого массива. Запишите ее в переменную $result. <br>';
$j = 50;
$arr3 = [];
for($i = 0; $i < 5; $i++) {
   $arr3[$i] = $j-$i*5;//$arr3[0] = 50 - 0*5 = 50 $arr3[1] = 50-1*5=45
   echo $arr3[$i] . " ";
   
}
echo '<br>';
$result=0;
for ($i=0; $i<5; $i++){
        $result+=$arr3[$i];
       
}
echo $result;
echo '<br>';
echo '<br>';

echo '2 Дан массив, заполненный случайными числами. Необходимо вывести массив, <br>
заполненный случайными числами. После чего вывести данный массив в противоположном порядке.<br>';
$arr4=[];
for($i=0; $i<5; $i++){
        $arr4[]=mt_rand(0,10); 
        echo $arr4[$i]. ' ';
}
echo '<br>';
for ($i = count($arr4)-1; $i >= 0; $i--){
         echo $arr4[$i]. ' ';
}
echo '<br>';
echo '<br>';
?>
 <?php 
echo '3 Создать массив, заполненный названиями картинок, например, 1.png.<br>
 Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.';
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
 <?php      
        $arr=['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg'];
        $i=mt_rand(0,5);
        echo '<br>' . $arr[$i] . '<br>';
        echo 'img src ="'.$arr[$i].'" alt="images"';
        
 ?>
   <!-- include "$arr[$i]"; -->
 <!-- <img src ="2.jpg" alt="images"> -->
 <!-- <img src ="$arr[$i]" alt="images"> -->
 </body>
 </html>



 <?php 
  echo '<br>';
  echo '<br>';


 echo '4 Дано N действительных случайных чисел в диапазоне от -100 до 100. 
 Найти минимальное положительное число и максимальное отрицательное число.<br>';
$arr11=[];
$n=10;
for ($i=0; $i<=$n; $i++){
        $arr11[$i]=mt_rand(-100,100);
}echo '<pre>';
print_r($arr11);
echo '</pre>';
$min=100;
$max=-100;
$minj=0;
$maxj=0;
foreach ($arr11 as $j => $item){
        if ($item<0 && $item>$max){ 
                $max=$item;
                $maxj=$j;
        }
        elseif ($item>0 && $item<$min){ 
                 $min=$item;
                 $minj=$j;  
        }      
}
        echo "минимальное положительное значение $min";
        echo '<br>';
        echo "максимальное положитнльное значение $max";
echo '<br>';
echo '<br>';


echo '7 Дан двумерный массив из 5 строк и 6 столбцов. 
        Определить для каждого четного столбца максимальный элемент. <br> Найти произведение этих элементов.<br>';
$arr10=[[1,12,3,6,91], [14,47,15,1,0], [2,10,40,51,18], [45,7,12,9,36], [4,1,0,0,10], [7,3,4,15,52]];
echo '<pre>';
print_r($arr10);
echo '</pre>';
$summa=0;
foreach($arr10 as $key => $value1){
        //if (($value1 + 1) % = 0){
        //if ($value1=1 or $value1=3 or $value1=5){
                $max_item=0;
                foreach($value1 as $item1){
                        if($item1>$max_item){
                                $max_item=$item1;
                }
       // }
        }echo 'Максимальные элементы:';
        echo $max_item . '<br>';
        $summa=$summa+$max_item;
        }
        echo " Сумма = $summa";