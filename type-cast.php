<?php

// type declaration
function area(int $x, int $y): int
{
    return $x * $y;
};
print(area(10, 20));

function arrSum(array $arr): int
{
    return array_sum($arr);
}
print(arrSum([1, 2, 3]));

function performOperation(int $a, int $b, callable $operation): int {
    return $operation($a, $b);
}
print(performOperation(10, 20, function ($a, $b) {
    return $a + $b;
}));




// type casting
// ----------------------------------------------------------------
// $name = (string) "ko htet";
// echo $name;

// $age = (int) 18;
// echo $age;

// $hasGirlfriend = (bool) true;
// echo $hasGirlfriend;

// $height = (float) 5.5;
// echo $height;

// $arr = (array) [
//     "id" => 1,
//     "name" => "ko htet",
//     "age" => 18,
//     "hasGirlfriend" => true,
//     "height" => 5.5
// ];
// print_r($arr);
// print_r($arr["name"]);

// $obj = (object) [
//     "name" => "ko htet",
//     "age" => 18,
//     "hasGirlfriend" => true,
//     "height" => 5.5
// ];
// print_r($obj);
// print_r($obj->name);

// $nothing = (null);
// echo $nothing;



// $name =(int) "ko htet";
// $age =(int) 22.5;

// print($age);
// var_dump($age);

// $arr = [
//     "id" => 115,
//     "model" => "malibu",
//     "brand" => "chev"
// ];

// print($arr);

// function area(int $w, int $h): int {
//     return $w * $h;
// }

// print(area(15, 50));