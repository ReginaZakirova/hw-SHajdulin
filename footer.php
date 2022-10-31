<?php
echo "<Количество слов на странице: " . countword($contentArray);
echo "<br>";
echo "Количество гласных букв на странице: " . countvowel($contentArray);
echo "<br>";
echo "День рождения: $birthDate <br>";
echo "Текущая дата: $currentDate <br>";
echo "Количество дней между датами: " . differencedate($birthDate, $currentDate);
?>
