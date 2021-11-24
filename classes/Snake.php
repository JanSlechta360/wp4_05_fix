<?php

class Dog extends Animal
{
  public string $Poisonous;

    public function __construct(string $Name,int $Legs,string $Poisonous)
    {
      $this->Name = $Name;
      $this->Legs = $Legs;
      $this->Poisonous = $Poisonous;
    }

public function getPoisonous() {
    return $this->Poisonous;
}
}