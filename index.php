<?php

    require_once 'classes/Pow.php';
    require_once 'classes/Plus.php';
    require_once 'classes/Multiple.php';
    require_once 'classes/MinusPlus.php';
    require_once 'classes/DividePlus.php';
    require_once 'classes/MinusMultiple.php';
    require_once 'classes/DivideMultiple.php';

    // 1 exercise
    echo "Задание №1<br>";
    $pow = new Pow();
    echo "<pre>";
    print_r($pow);
    echo "</pre>";

    // 2 exercise
    echo "Задание №2-1<br>";
    $pow->setArgumentOne(2);
    $pow->setArgumentTwo(3);
    $pow->setArgumentTree(1);
    echo $pow->powFunction().'<br>';

    echo "Задание №2-2<br>";
    $plus = new Plus();
    $plus->setArgumentOne(1);
    $plus->setArgumentTwo(2);
    $plus->setArgumentTree(3);
    echo $plus->plusFunction().'<br>';

    echo "Задание №2-3<br>";
    $multiple = new Multiple();
    $multiple->setArgumentOne(4);
    $multiple->setArgumentTwo(5);
    $multiple->setArgumentTree(2);
    echo $multiple->multipleFunction().'<br>';

    // 3 exercise
    echo "Задание №3-1-1<br>";
    $minusPlus = new MinusPlus();
    $minusPlus->setArgumentTree(2);
    $minusPlus->setArgumentFour(1);
    echo $minusPlus->minusPlusFunction().'<br>';
    echo $minusPlus->minusPlusCalcFunction().'<br>';

    echo "Задание №3-1-2<br>";
    $dividePlus = new DividePlus();
    $dividePlus->setArgumentTree(12);
    $dividePlus->setArgumentFour(2);
    echo $dividePlus->dividePlusFunction().'<br>';
    echo $dividePlus->dividePlusCalcFunction().'<br>';

    echo "Задание №3-2-1<br>";
    $minusMultiple = new MinusMultiple();
    $minusMultiple->setArgumentTree(13);
    $minusMultiple->setArgumentFour(2);
    echo $minusMultiple->minusMultipleFunction().'<br>';
    echo $minusMultiple->minusMultipleCalcFunction().'<br>';

    echo "Задание №3-2-2<br>";
    $divideMultiple = new DivideMultiple();
    $divideMultiple->setArgumentTree(50);
    $divideMultiple->setArgumentFour(1);
    echo $divideMultiple->divideMultipleFunction().'<br>';
    echo $divideMultiple->divideMultipleCalcFunction().'<br>';

