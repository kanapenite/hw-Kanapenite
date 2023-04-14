<?php
echo '<b> Слайд 17 урок 5-6.</b><br><br>';
echo '<b> 8. Создать двумерный массив произвольной длины, содержащий строковые значения.<br>
Необходимо вывести все элементы массива, начинающиеся на А.</b><br>';
$arr5=[
        'fruits'=>['apple', 'pinapple', 'banana'],
        'vegetables'=>['tomato', 'asparagus'],
        'animals'=>['cat', 'dog', 'lion', 'rat']
];
echo '<pre>';
print_r($arr5);
echo '</pre><br>';
foreach($arr5 as $key => $name){
                      if(mb_substr($key,0,1) =="a"){
                echo $key . '<br>';
        }
        foreach($name as $word){
                if(mb_substr($word,0,1) =="a"){
                        echo $word . '<br>';
                }
        }
}
echo '<br>';

echo '<b> 9. Создать двумерный массив, состоящий из чисел. Необходимо вывести <br>
общее количество элементов массива и количество элементов массива для каждого измерения.</b> <br>';
$arr2=[[1,2,7,12,75],[4,0,10,35],[30,11,7],[3,0,4]];
echo '<pre>';
print_r($arr2);
echo '</pre><br>';
$c=0;
$b=count($arr2);
foreach ($arr2 as $one => $item){
       $a=count($item);
       echo 'кол-во элементов измерения '. $a. '<br>';
       $c=$c+$a;
}
        $b=count($arr2);
        echo 'кол-во измерений '.$b. '<br>';
        echo 'общее кол-во элементов '.$c. '<br>';