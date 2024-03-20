<?php

namespace app;

use core\Multiple;
use core\Calculate;

// 3. Создать по 2 наследника от наследников первого уровня. Каждое свойство должно иметь геттер и сеттер.
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя
// и своими данными. И по одному методу который выполняет любое математическое действие со свойством корневого класса
// и своим свойством. В случае если реализован наследник класса содержащего абстрактную функцию
// то класс должен содержать реализацию абстракции.

class MinusMultiple extends Multiple
{

    private int $argumentFour = 0;

    /**
     * @return int
     */
    public function getArgumentFour(): int
    {
        return $this->argumentFour;
    }

    /**
     * @param int $argumentFour
     */
    public function setArgumentFour(int $argumentFour): void
    {
        $this->argumentFour = $argumentFour;
    }

    // В наследнике реализован метод, который выполняет одно математическое действие с данными родителя
    // и своими данными.
    public function minusMultipleFunction(): int
    {
        return parent::getArgumentTree() * 2 - $this->argumentFour;
    }

    // В наследнике реализован метод, который выполняет одно математическое действие со свойством корневого класса
    // и своим свойством
    public function minusMultipleCalcFunction(): int
    {
        return Calculate::getArgumentOne() * 2 - $this->argumentFour;
    }
}