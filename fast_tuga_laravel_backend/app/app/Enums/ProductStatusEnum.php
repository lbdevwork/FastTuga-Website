<?php

namespace App\Enums;

enum ProductStatusEnum: string
{
    case HotDish = 'hot dish';
    case ColdDish = 'cold dish';
    case Drink = 'drink';
    case Dessert = 'dessert';
}

