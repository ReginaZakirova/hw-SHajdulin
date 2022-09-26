<?php
// Слайд 19. Задача п.2.
for ($i=1; $i<=50; $i++) {
    if (($i % 3 == 0) and ($i % 5 == 0)) {
        echo '<strong>'.$i.'</strong>'.'<br>';
    } elseif ($i % 3 == 0) {
        echo '<i>'.$i.'</i><'.'br>';
    } else {
        echo $i.'<br>';
    }
}
echo '<br>';

// Слайд 19. Задача п.4.
$a=10;
$i=0;
$sum = 0;
$str = 'Последовательность: ';
do {
    $i++;
    $sum = $sum + (($i - 1) * 3 + 1) / $i;
    $str = $str.(($i - 1) * 3 + 1).'/'.$i.' ';
}while ($sum<=$a);
echo $str.'<br>';
echo 'Сумма элементов: '.$sum.'<br>';
echo 'Количество элементов: '.$i.'<br>';
echo '<br>';

// Слайд 20. Задача п.1.
$n = 123456789;
$sum = 0;
while ($n > 0) {
    if (!($n % 2)){
        $sum = $sum + $n % 10;
    }
    $n = $n / 10;
}
echo 'Исходное число: '.$n;
echo 'Сумма четных чисел: '.$sum;
echo '<br>';

// Слайд 21. Задача п.1.
for ($i=5; $i<13; $i++) {
    echo $i.'<br>';
}
echo '<br>';

// Слайд 21. Задача п.2.
$num = 1000;
$i = 0;
while ($num > 50) {
    $num = $num / 2;
    $i++;
}
echo 'Число: '.$num.' Количество итераций: '.$i;
echo '<br>';

for ($num=1000, $i=0;$num > 50;) {
    $num = $num / 2;
    $i++;
}
echo 'Число: '.$num.' Количество итераций: '.$i;
echo '<br>';

// Слайд 21. Задача п.3.
$i = 3;
$stop = 10 - $i;
$str = ' ';
for ($n=0;$n<=$stop; $n++) {
    if ($n == $stop) {
        echo $n;
    } else {
        echo $n.', ';
    }
};
echo '<br>';
