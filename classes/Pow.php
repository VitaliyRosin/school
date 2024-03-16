<?php

    require_once 'classes/Calculate.php';

    // 2. Создать 3 наследника родительского класса. Каждый наследник должен содержать одно свойство.
    // Каждое свойство должно иметь геттер и сеттер.
    // Наследники должны реализовать по одному методу который выполняет одно математическое действие
    // с данными родителя и своими данными. Один наследник не должен быть наследуемым.

    // При наследовании от абстрактного класса, все методы, помеченные абстрактными в родительском классе,
    // должны быть определены в дочернем классе
    // Если класс final, то наследников он иметь не может
    final class Pow extends Calculate {

        private int $argumentTree = 0;

        /**
         * @return int
         */
        public function getArgumentTree(): int
        {
            return $this->argumentTree;
        }

        /**
         * @param int $argumentTree
         */
        public function setArgumentTree(int $argumentTree): void
        {
            $this->argumentTree = $argumentTree;
        }

        // Абстрактный метод powFunction класса Calculate переопределен в классе потомке Pow
        // И содержит модификатор доступа менее строгий(public) чем в классе родителе Calculate(protected)
        // public используем так как хотим чтобы был доступ к методу из глобального контекста
        public function powFunction(): int{
            return pow(parent::getArgumentOne(), parent::getArgumentTwo()) * $this->getArgumentTree();
        }
    }

