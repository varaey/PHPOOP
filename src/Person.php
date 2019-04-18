<?php


class Person
{
    const MAX_POSSIBLE_AGE = 150;

    public $email;
    private $age;

    public function  setAge($age) {
        if ($age > self::MAX_POSSIBLE_AGE) {
            echo "Imposible person age";

            return;
        }

        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}