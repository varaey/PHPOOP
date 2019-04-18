#!/usr/bin/env php
<?php

require_once __DIR__ . '/../src/Person.php';

echo "..." . PHP_EOL;

$john = new Person();

$john->email = 'john';

$john->setAge(32);


echo $john->getAge();
