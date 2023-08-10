<?php

namespace Maris\Symfony\Geo\Entity;

use Maris\Symfony\Geo\Interfaces\BoundsAggregateInterface;

abstract class Geometry implements BoundsAggregateInterface
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