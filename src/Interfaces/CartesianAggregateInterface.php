<?php

namespace Maris\Symfony\Location\Interfaces;

use Maris\Symfony\Location\Entity\Cartesian;

/**
 * Интерфейс для объектов способных возвращать
 * точку в Декартовой системе координат.
 */
interface CartesianAggregateInterface
{
    public function getCartesian():Cartesian;
}