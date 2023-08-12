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

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @param float $x
     * @return $this
     */
    public function setX(float $x): self
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $y
     * @return $this
     */
    public function setY(float $y): self
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    /**
     * @param float $z
     * @return $this
     */
    public function setZ(float $z): self
    {
        $this->z = $z;
        return $this;
    }



}