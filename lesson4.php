<?php
    $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

    // посчитать длину массива
    echo "1. Длинна массива - ".count($arr)."<br>";

    // переместить первые 4 элемента массива в конец массива
    for($i = 0; $i < 4; $i++){
        $arr[] = array_shift($arr);
    }

    echo "2. Новый массив: ";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // получить сумму 4,5,6 элемента
    $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
    $sum = 0;

    for($i = 4; $i < 7; $i++){
        $sum += $arr[$i];
    }

    echo "3. Сумма 4, 5 и 6 элементов - ".$sum."<br>";


    $firstArr = [
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'foure' => 5,
        'five' => 12,
    ];

    $secondArr = [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
        'foure' => 5,
        'five' => 13,
        'six' => 37,
    ];

    // найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
    $arr = array_diff($secondArr, $firstArr);

    echo "4. Элементы которые отсутствуют в первом массиве и присутствуют во втором: ";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // найти все элементы которые присутствуют в первом и отсутствуют во втором
    $arr = array_diff($firstArr, $secondArr);

    echo "5. Элементы которые присутствую в первом и отсутствуют во втором: ";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // найти все элементы значения которых совпадают
    $arr = array_intersect($firstArr, $secondArr);

    echo "6. Элементы значения которых совпадают: ";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // найти все элементы значения которых отличается
    $arr1 = array_diff($firstArr, $secondArr);
    $arr2 = array_diff($secondArr, $firstArr);
    $arr = array_merge_recursive($arr1, $arr2);

    echo "7. Элементы значения которых отличается: ";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $firstArr = [
        'one' => 1,
        'two' => [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
        ],
        'three' => [
            'one' => 1,
            'two' => 2,
        ],
        'foure' => 5,
        'five' => [
            'three' => 32,
            'foure' => 5,
            'five' => 12,
        ],
    ];

    // получить все вторые элементы вложенных массивов
    echo "8. Все вторые элементы вложенных массивов: "."<br>";
    foreach($firstArr as $value){
        if (is_array($value)){
            $i = 0;
            foreach($value as $nkey => $nvalue) {
                if ($i === 2)
                    echo $nkey."=>".$nvalue."<br>";
                $i++;
            }
        }
    }

    // получить общее количество элементов в массиве
    echo "9. Общее количество элементов в массиве: ".count($firstArr, COUNT_RECURSIVE)."<br>";

    // получить сумму всех значений в массиве
    $sum = 0;
    foreach($firstArr as $value) {
        if (is_array($value))
            $sum += array_sum($value);
        else
            $sum += $value;
    }

    echo "10. Сумма всех значений в массиве: ".$sum."<br>";

?>