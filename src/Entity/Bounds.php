<?php

namespace Maris\Symfony\Geo\Entity;

use JsonSerializable;

class Bounds implements JsonSerializable
{
    /**
     * Крайняя северная координата объекта.
     * @var float|null
     */
    protected ?float $north = null;

    /**
     * Крайняя западная координата объекта.
     * @var float|null
     */
    protected ?float $west = null;

    /**
     * Крайняя южная координата объекта.
     * @var float|null
     */
    protected ?float $south = null;

    /**
     * Крайняя восточная координата объекта.
     * @var float|null
     */
    protected ?float $east = null;

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
}