<?php

namespace Name\Plib;

class FourCheesePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Четыре сыра',
            'Белый сливочный соус',
            ['Моцарелла', 'Пармезан', 'Горгонзола', '"Эмменталь"']
        );
    }
}
