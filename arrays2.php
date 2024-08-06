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
2. Сортировка многомерного массива:
Отсортируйте многомерный массив по одному из ключей.
*/

function cmp($a, $b)
{
    if ($a['id'] == $b['id']) {
        return 0;
    }
    return ($a['id'] < $b['id']) ? -1 : 1;
}

usort($array, 'cmp');

print_r($array);
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
            [id] => 1
            [create] => 22.04.2023
            [title] => array1
        )

    [2] => Array
        (
            [id] => 2
            [create] => 03.07.2023
            [title] => array2
        )

    [3] => Array
        (
            [id] => 2
            [create] => 12.12.2023
            [title] => array4
        )

    [4] => Array
        (
            [id] => 3
            [create] => 04.04.2023
            [title] => array3
        )

    [5] => Array
        (
            [id] => 4
            [create] => 09.02.2023
            [title] => array4
        )

)
 */