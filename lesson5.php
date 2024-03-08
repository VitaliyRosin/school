<?php
$array = [
    'one' => 1,
    'two' => [
        'two_one' => 21,
        'two_two' => 22,
        'two_three' => 23
    ],
    'three' => [
        'three_one' => 31,
        'three_two' => 32,
        'three_three' => [
            'three_three_one' => 331,
            'three_three_two' => 332,
            'three_three_tree' => 333
        ]
    ],
    'foure' => [
        'foure_one' => 41,
        'foure_two' => [
            'foure_two_one' => 421,
            'foure_two_two' => 422,
            'foure_two_tree' => 423
        ],
        'foure_three' => 43,
        'foure_foure' => 44
    ],
    'five' => [
        'five_one' => 51,
        'five_two' => 52,
        'tfive_three' => 53
    ]
];

// 1. Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер,
// которого передан параметром во всех вложенных массивах.

function func_array(array $myarr, int $number, $flag = false)
{
    $i = 1;
    $array = [];
    foreach ($myarr as $value) {

        if (is_array($value)) {
            if (count($value) >= $number) {

                $array = array_merge_recursive($array, func_array($value, $number, true));
            }
        } elseif (($i === $number) && ($flag === true)) {
            $array[] = $value;
        }

        $i++;
    }
    return $array;
}

echo '<pre>';
print_r(func_array($array, 1));
echo '</pre>';


// 2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
$srting = "sbuwwu buxw xbx wbx ddbxuwxwb
	ddbx
	b";

function count_b($str)
{
    if (!is_string($str))
        return false;
    else {
        return substr_count($str, 'b');
    }
}

echo count_b($srting);

// 3.Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
function sum_array(array $myarr)
{
    $i = 1;
    $sum = 0;
    foreach ($myarr as $value) {

        if (is_array($value)) {
            $sum = $sum + sum_array($value);
        } else {
            $sum = $sum + $value;
        }

        $i++;
    }
    return $sum;
}

echo '<pre>';
print_r(sum_array($array));
echo '</pre>';

// 4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера,
// размер возвращать в float

function square_func($a, $b): float {
    $squarea = $a*$a;
    $squareb = $b*$b;
    return $squarea/$squareb;
}

echo square_func(4,3);

// А в целом я так и не понимаю что требуется в условии 4 задачи...