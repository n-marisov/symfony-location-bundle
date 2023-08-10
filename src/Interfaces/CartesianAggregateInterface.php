<?php

namespace Maris\Symfony\Geo\Interfaces;

use Maris\Symfony\Geo\Entity\Cartesian;

/**
 * Интерфейс для объектов способных возвращать
 * точку в Декартовой системе координат.
 */
interface CartesianAggregateInterface
{
    public function getCartesian():Cartesian;
}