<?php

namespace Name\Plib;

use Exception;

class BigPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'hawaiian' => new HawaiianPizza(),
            'pepperoni' => new PepperoniPizza(),
            'four_cheese' => new FourCheesePizza(),
            default => throw new Exception("Неизвестный тип пиццы: $type"),
        };
    }
}