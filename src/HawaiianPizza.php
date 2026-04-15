<?php

namespace Name\Plib;

class HawaiianPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Гавайская',
            'Белый соус на основе сливок, чеснока и пармезана',
            ['Ветчина', 'Ананас', 'Моцарелла', 'Орегано']
        );
    }
}
