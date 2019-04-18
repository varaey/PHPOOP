<?php


class Person
{
    const MAX_POSSIBLE_AGE = 150;

    private $email;
    private $age;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function  __destruct()
    {
        // TODO: Implement __destruct() method.

    }

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

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}