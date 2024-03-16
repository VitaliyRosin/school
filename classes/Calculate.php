<?php

    // 1. Создать родительский (главный класс). Класс должен содержать 2 свойства
    // Каждое свойство должно иметь геттеры и сеттеры, и должен содержать абстрактную функцию возведения в степень.

    // Если в классе есть хотя бы один абстрактный метод, то класс тоже должен быть абстрактным
    abstract class Calculate{

        private int $argumentOne = 4;
        private int $argumentTwo = 5;

        // Не понимаю зачем в абстрактном классе сеттеры если мы все равно не сможем ими воспользоваться?
        // Так, как создать обьект абстактного класса нельзя.
        // По этой же причине необходимо сразу задать значекния свойст $argumentOne и $argumentTwo
        // А геттерами мы хотябы достанем через parent::getArgumentOne() и parent::getArgumentTwo() эти свойства
        /**
         * @return float|int
         */
        public function getArgumentOne(): int
        {
            return $this->argumentOne;
        }

        /**
         * @param float|int $argumentOne
         */
        public function setArgumentOne(int $argumentOne): void
        {
            $this->argumentOne = $argumentOne;
        }

        /**
         * @return float|int
         */
        public function getArgumentTwo(): int
        {
            return $this->argumentTwo;
        }

        /**
         * @param float|int $argumentTwo
         */
        public function setArgumentTwo(int $argumentTwo): void
        {
            $this->argumentTwo = $argumentTwo;
        }

        // Абстрактный метод powFunction будет переопределен в классе потомке Plus
        // И должен содержать менее строгий(public) или такой же(protected) модификатор доступа,
        // как в классе родителе Calculate(protected)
        abstract protected function powFunction(): int;

    }

