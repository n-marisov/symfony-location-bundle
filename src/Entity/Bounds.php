<?php

namespace Maris\Symfony\Geo\Entity;

use JsonSerializable;
use Maris\Interfaces\Geo\Model\BoundsInterface;

class Bounds implements JsonSerializable,BoundsInterface
{
    /**
     * Крайняя северная координата объекта.
     * @var float
     */
    protected float $north;

    /**
     * Крайняя западная координата объекта.
     * @var float
     */
    protected float $west;

    /**
     * Крайняя южная координата объекта.
     * @var float
     */
    protected float $south;

    /**
     * Крайняя восточная координата объекта.
     * @var float
     */
    protected float $east;

    /**
     * По умолчанию границы всей планеты.
     * @param float|null $north
     * @param float|null $west
     * @param float|null $south
     * @param float|null $east
     */
    public function __construct(?float $north = 90.0, ?float $west = -180.0, ?float $south = -90.0, ?float $east = 180.0)
    {
        $this->north = $north;
        $this->west = $west;
        $this->south = $south;
        $this->east = $east;
    }

    /**
     * Приводит объект к bbox.
     * @return float[]
     */
    public function jsonSerialize(): array
    {
        return [ $this->north, $this->west, $this->south, $this->east ];
    }

    /**
     * @return float
     */
    public function getNorth(): float
    {
        return $this->north;
    }

    /**
     * @return float
     */
    public function getWest(): float
    {
        return $this->west;
    }

    /**
     * @return float
     */
    public function getSouth(): float
    {
        return $this->south;
    }

    /**
     * @return float
     */
    public function getEast(): float
    {
        return $this->east;
    }


}