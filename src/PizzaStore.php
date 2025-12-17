<?php

namespace anora\lib;

class PizzaStore
{
  public string $type;
  public function createPizza(string $type): string
  {
    return $this->type;
  }
  public function orderPizza(string $type): void
  {
    $pizza = $this->createPizza($type);
    $pizza->prepare();
    $pizza->cut();
  }
}
