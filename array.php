<?php
echo "Слайд 15. п.5";
echo "<br>";

$itogo = [
    'математика' => 0,
    'физика' => 0,
    'химия' => 0,
    'информатика' => 0
];
$students = [
    'Иванов' => NULL,
    'Петров' => NULL,
    'Васечкин' => NULL
];

foreach ($students as $key => $value) {
    $students[$key] = [
    'математика' => mt_rand(1, 5),
    'физика' => mt_rand(1, 5),
    'химия' => mt_rand(1, 5),
    'информатика' => mt_rand(1, 5)
];
}
foreach ($students as $value) {
    foreach ($value as $subject => $result) {
        $itogo[$subject] += $result;
    }
}
echo "<pre>";
print_r($students);
echo "</pre>";

foreach ($itogo as $subject => $result) {
    $averageRating = round($result / count($students), 2);
    echo "Суммарная оценка по предмету $subject : $result. Средняя оценка по предмету $subject: ". $averageRating . "<br>";
}

echo "<br>";
echo "Слайд 15. п.6";
echo "<br>";
$monthsArray = [
    'Январь' => NULL,
    'Февраль' => NULL,
    'Март' => NULL,
    'Апрель' => NULL,
    'Май' => NULL,
    'Июнь' => NULL,
    'Июль' => NULL,
    'Август' => NULL,
    'Сентябрь' => NULL,
    'Октябрь' => NULL,
    'Ноябрь' => NULL,
    'Декабрь' => NULL
];
foreach ($monthsArray as $key => $value)
    $monthsArray[$key] = [
        'Куба' => mt_rand(10, 40),
        'Ямайка' => mt_rand(10, 40),
        'Тринидад' => mt_rand(10, 40),
        'Гаити' => mt_rand(10, 40)
    ];
echo "<pre>";
print_r($monthsArray);
echo "</pre>";
foreach ($monthsArray as $month => $value) {
    $tempMax = 0;
    foreach ($value as $island => $temp) {
        if ($temp > $tempMax) {
            $tempMax = $temp;
        }
    }
    $maxTempArray[$month] = $tempMax;
}
echo "<pre>";
print_r($maxTempArray);
echo "</pre>";

echo "<br>";
echo "Слайд 15. п.7";
echo "<br>";
$row = 5;
$col = 6;
$result = 1;
for ($i = 0; $i < $row; ++$i) {
    for ($j = 1; $j < $column + 1; ++$j) {
        $array[$j][$i+1] = mt_rand(0, 50);
        echo $array[$j][$i+1] . ' ';
    }
    echo '<br>';   
}
echo '<pre>';
print_r($array);
echo '</pre>';
foreach($array as $key => $value ) {
    if($key % 2 == 0) {
        $max = 0;
        foreach ($value as $item){
            if($item > $max){
                $max = $item;
            } 
            
        }
        echo 'Максимальное значение ' . $key .' столбца' . " - $max;" . '<br>';
        $result = $result*$max;
    } 
}
echo "Произведение элементов: " . $result . '<br>';