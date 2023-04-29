<?php
//1 Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.
file_put_contents('hello.txt', 'Hello, world! Im Name');
?>

<?php
//2 Создайте папку 'test'.
mkdir('test');
?>

<?php
echo'<b> 3 Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. <br>
Вывести на экран только имя и фамилию. </b><br>';
$strArray = file('text.txt');
print_r($strArray[0]);
echo'<br>';
print_r($strArray[1]);
echo'<br><br><br>';

?>

<?php
echo'<b> 4 Даны два файла, состоящие из предложений. </b><br>';
echo'<b>Создать третий файл, 
содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.</b><br>';
//открываем два файла, удаляем лишние пробелы, (выводим для себя)
$str1=fopen('1.txt','r');
$text1 = fread($str1,743);
$text1=trim($text1);
echo $text1.'<br><br>';
$str2=fopen('2.txt','r');
$text2 = fread($str2,645);
$text2=trim($text2);
echo $text2.'<br><br>';
//преобразовали строку в массив
$strArray1=explode('.', $text1);
var_dump($strArray1);
echo'<br><br>';
$strArray2=explode('.', $text2);
var_dump($strArray2);
echo'<br><br>';
// находим различные элементы массивов
$strArray3=array_diff($strArray1,$strArray2);
var_dump($strArray3);
echo'<br><br>';
$strArray4=array_diff($strArray2,$strArray1);
var_dump($strArray4);
echo'<br><br>';
//создаем файл файл 3.txt и записываем различные элементы массивов в него
$file3=fopen("3.txt", "w");
$text3=serialize($strArray3);
fwrite($file3,$text3);
$text4=serialize($strArray4);
fwrite($file3,$text4);
//file_put_contents($file3,$text3);
echo'<b> 5 Создать четвертый файл, содержащий все повторяющиеся предложения.</b><br>';
// находим одинаковые элементы массивов
$strArray5=array_intersect($strArray1,$strArray2);
var_dump($strArray5);
echo'<br><br>';
//создаем файл файл 4.txt и записываем одинаковые элементы массивов в него
$file4=fopen("4.txt", "w");
$text5=serialize($strArray5);
fwrite($file4,$text5);
?>