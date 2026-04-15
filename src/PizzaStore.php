<?php

namespace Name\Plib;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();

        return $pizza;
    }

    abstract protected function createPizza(string $type): Pizza;
}