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
1. Фильтрация уникальных записей:
Создайте новый массив, который содержит только уникальные записи из исходного массива (без дубликатов id). В результирующем массиве каждый id должен встречаться только один раз.
*/

$result = array_map(function ($item) {
    static $ids = [];

    $id = $item['id'];
    if (!isset($ids[$id])) {
        $ids[$id] = 0;
    }
    $ids[$id]++;

    return $ids[$id] == 1 ? $item : false;
}, $array);

$result = array_filter($result);

print_r($result);
/*
Array
(
    [0] => Array
        (
            [id] => 1
            [create] => 14.04.2023
            [title] => array1
        )

    [1] => Array
        (
            [id] => 4
            [create] => 09.02.2023
            [title] => array4
        )

    [2] => Array
        (
            [id] => 2
            [create] => 03.07.2023
            [title] => array2
        )

    [5] => Array
        (
            [id] => 3
            [create] => 04.04.2023
            [title] => array3
        )

)
 */