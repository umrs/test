<?php
$array = [
    ['id' => 1, 'create' => "14.04.2023", 'title' => "array1"],
	['id' => 4, 'create' => "09.02.2023", 'title' => "array4"],
  	['id' => 2, 'create' => "03.07.2023", 'title' => "array2"],
    ['id' => 1, 'create' => "22.04.2023", 'title' => "array1"],
  	['id' => 2, 'create' => "12.12.2023", 'title' => "array4"],
  	['id' => 3, 'create' => "04.04.2023", 'title' => "array3"]
];


/*
3. Фильтрация по условиям:
Верните из массива только те элементы, которые удовлетворяют определенному условию (например, имеют заданный id).
*/

$result = array_column($array, 'id', 'title');

print_r($result);
/*
Array
(
    [array1] => 1
    [array4] => 2
    [array2] => 2
    [array3] => 3
)
 */