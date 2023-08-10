<?php

namespace Maris\Symfony\Geo\Interfaces;

use Maris\Symfony\Geo\Entity\Location;

/**
 * Интерфейс для объектов способных возвращать
 * точку в обычной системе координат.
 */
interface LocationAggregateInterface
{
    public function getLocation():Location;
}