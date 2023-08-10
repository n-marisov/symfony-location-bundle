<?php

namespace Maris\Symfony\Geo\Interfaces;

use Maris\Symfony\Geo\Entity\Bounds;

/***
 * Интерфейс для любой фигуры имеющей границы.
 */
interface BoundsAggregateInterface
{
    /**
     * Возвращает объект границ.
     * @return Bounds
     */
    public function getBounds():Bounds;
}