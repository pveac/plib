<?php

namespace Name\Plib;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Пепперони',
            'Томатный соус',
            ['Острая салями пепперони', 'Моцарелла', 'Орегано', 'Халапеньо']
        );
    }
}
