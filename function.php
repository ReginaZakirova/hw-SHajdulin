<?php
echo 'Слайд 13 п.1';
echo '<br>';
function compare($arg1, $arg2)
{
    $a = $arg1;
    $b = $arg2;
    if ($a > $b) {
        return $a;
    } elseif ($a == $b) {
        return 'равны';
    } else {
        return $b;
    }
}
$result = compare(9, 5);
echo $result;

echo '<br>';
echo 'Слайд 13. п.2';
echo '<br>';
function pifagor($katet1, $katet2)
 {
    $a = $katet1;
    $b = $katet2;
    $hypotenuse = sqrt((pow($a, 2) + pow($b, 2)));
    return $hypotenuse;
}
$result = pifagor(9, 5);
echo $result;

echo '<br>';
echo 'Слайд 13. п.3';
echo '<br>';
function function_new($arg)
{
    $i = 0;
    $finish = 1000000;
    for ($i = $arg; $i <= $finish;) {
        $i = $i * 10;
    }
    return $i;
}
$result = function_new(10);
echo $result;

echo '<br>';
echo 'Слайд 14. п.4';
echo '<br>';
function rand_arr()
{
    $arr = array();
    $stop = mt_rand(1, 10);
    for ($i=1; $i <= $stop; $i++) {
        $arr[$i] = mt_rand(1, 100);
    }
    return $arr;
}
$result = rand_arr();
echo '<pre>';
print_r($result);
echo '</pre>';

echo '<br>';
echo 'Слайд 14. п.5';
echo '<br>';
function array_arithmetic_mean($arg)
{
    $summa = 0;
    $kol = 0;
    foreach ($arg as $value) {
        $summa = $summa + $value;
        $kol++;
    }
    $result = $summa / $kol;
    return $result;
}
$arr = array();
$stop = mt_rand(5, 10);
for ($i=1; $i <= $stop; $i++) {
    $arr[$i] = mt_rand(1, 100);
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br>';
$result = array_arithmetic_mean($arr);
echo $result;

echo '<br>';
echo 'Слайд 14. п.6';
echo '<br>';
function word_count($arg)
{
    $arr_str = explode(' ', $arg);
    $result = count($arr_str);
    return $result;
}
$str = 'Сквозь волнистые туманы Пробирается луна, На печальные поляны Льет печально свет она';
$result = word_count($str);
echo $result;

echo '<br>';
echo 'Слайд 14. п.7';
echo '<br>';
function fibonacci($arg) {
    $result_array = [0,1];
    for( $i=0; $i < ($arg-2); $i++ ){
        $current = $result_array[$i] + $result_array[$i+1];
        array_push( $result_array, $current );
    }
    return implode(", ",$result_array);
}
$result = fibonacci(10);
echo $result;