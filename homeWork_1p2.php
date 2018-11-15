<?php
/** #5
 * Создайте массив $bmw с ячейками:
 * a. model
 * b. speed
 * c. doors
 * d. year
 * 2. Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
 * 3. Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните данными)
 * 4. Объедините три массива в один многомерный массив
 * 5. Выведите значения всех трех массивов в виде:
*/
## Старый вариант
/*
$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015"];
$toyota = ["model" => "prius", "speed" => 125, "doors" => 5, "year" => "2017"];
$opel = ["model" => "vectra", "speed" => 220, "doors" => 2, "year" => "2013"];

$cars = ["BMW" => $bmw, "TOYOTA" => $toyota, "OPEL" => $opel];

echo "CAR - BMW\n";
echo $cars['BMW']['model']." ".$cars['BMW']['speed']." ".$cars['BMW']['doors']." ".$cars['BMW']['year']."\n";

echo "CAR - TOYOTA\n";
echo $cars['TOYOTA']['model']." ".$cars['TOYOTA']['speed']." ".$cars['TOYOTA']['doors'];
echo " ".$cars['TOYOTA']['year']."\n";

echo "CAR - OPEL\n";
echo $cars['OPEL']['model']." ".$cars['OPEL']['speed']." ".$cars['OPEL']['doors']." ".$cars['OPEL']['year']."\n";*/
## Новый вариант
function createArray($nameArray)
{
    if (preg_match('/\BMW\b/i', "$nameArray")) {
        return $nameArray = array("model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015");
    } elseif (preg_match('/\OPEL\b/i', "$nameArray")) {
        return $nameArray = array("model" => "vectra", "speed" => 220, "doors" => 2, "year" => "2013");
    } elseif (preg_match('/\TOYOTA\b/i', "$nameArray")) {
        return $nameArray = array("model" => "prius", "speed" => 125, "doors" => 5, "year" => "2017");
    } else {
        return "неверное имя массива";
    }
}
function getCar($whichCar)
{
    $carOptions = "";
    if (!createArray("$whichCar")) {
        foreach (createArray("$whichCar") as $key => $item) {
            $carOptions .= $key." - ".$item."<br/> ";
        }
        echo $carOptions;
    } else {
        echo "нет такого авто в условии";
    }
}
print_r(getCar('lada'));
