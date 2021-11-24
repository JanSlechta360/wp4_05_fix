<?php

class Dog extends Animal
{
  public string $Fur;

    public function __construct(string $Name, int $Legs, string $Fur)
    {
      $this->Name = $Name;
      $this->Legs = $Legs;
      $this->Fur = $Fur;
    }

    public function getFur() {
      return $this->Fur;
    }
}
?>