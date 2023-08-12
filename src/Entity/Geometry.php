<?php

namespace Maris\Symfony\Geo\Entity;

use Maris\Symfony\Interfaces\Geo\Model\GeometryInterface;

abstract class Geometry implements GeometryInterface
{
    protected ?int $id = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }


}