<?php

namespace Maris\Symfony\Geo\Entity;


/**
 * Точка в Декартовой системе координат.
 */
class Cartesian
{
    protected float $x;
    protected float $y;
    protected float $z;

    /**
     * @param float $x
     * @param float $y
     * @param float $z
     */
    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

}