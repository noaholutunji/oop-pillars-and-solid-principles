<?php

class Person
{
  private $name;

  private $age;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getAge()
  {
    return $this->age * 365;
  }

  public function setAge($age)
  {
    if ($age < 18) {
      throw new Error("You are too young");
    }

    $this->age = $age;
  }
}

$noah = new Person('Noah Osuolale');


$noah->setAge(30);

$noah->age = 8;

var_dump($noah->getAge());
