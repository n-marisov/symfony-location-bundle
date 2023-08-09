<?php

namespace Maris\Symfony\Location\Interfaces;

use Maris\Symfony\Location\Entity\Location;

/**
 * Интерфейс для объектов способных возвращать
 * точку в обычной системе координат.
 */
interface LocationAggregateInterface
{
    public function getLocation():Location;
}