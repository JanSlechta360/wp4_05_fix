<?php

abstract class Animal
{
  public string $Name;
  public int $Legs;

    public function getName() {
      return $this->Name;
    }
    public function getLegs() {
      return $this->Legs;
    }
}
?>
