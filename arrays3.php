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

$needId = 2;
$result = array_filter($array, function ($item) use ($needId) {
    return $item['id'] == $needId;
});

print_r($result);
/*
Array
(
    [2] => Array
        (
            [id] => 2
            [create] => 03.07.2023
            [title] => array2
        )

    [4] => Array
        (
            [id] => 2
            [create] => 12.12.2023
            [title] => array4
        )

)
 */