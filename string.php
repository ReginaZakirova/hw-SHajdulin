<?php
echo 'Слайд 19. п.1';
echo '<br>';
$string= "fact";
$string = str_replace("f", "F", $string);
echo "$string <br>";

echo '<br>';
echo 'Слайд 19. п.2';
echo '<br>';
$fio = "Шайдулин Илья Александрович";
$fioArray = explode(' ', $fio);
$fio = $fioArray[1] . " " . $fioArray[0];
echo "$fio <br>";

echo '<br>';
echo 'Слайд 19. п.3';
echo '<br>';
$string = "Привет, мир";
echo "В строке $string  " . substr_count($string, "и") . " вхождений символа 'и'<br>";

echo '<br>';
echo 'Слайд 19. п.4';
echo '<br>';
$string = "html css php";
$stringAarray = explode(' ', $string);
$lenArray = count($stringAarray)-1;
for ($i=0; $i<=$lenArray; $i++){
    echo "$stringAarray[$i] <br>";
}

echo '<br>';
echo 'Слайд 19. п.5';
echo '<br>';
$filename = "image.png";
if (substr_count($filename, ".png") > 0){
    echo "Да";
} else{
    echo "Нет";
}
echo '<br>';
