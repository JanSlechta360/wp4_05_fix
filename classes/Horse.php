<?php

class Horse extends Animal
{
  public string $Speed;

    public function __construct(string $Name,int $Legs,string $Speed)
    {
      $this->Name = $Name;
      $this->Legs = $Legs;
      $this->Speed = $Speed;
    }

public function getPoisonous() {
    return $this->Poisonous;
}
}