<?php

namespace Maris\Symfony\Location;

use Maris\Symfony\Location\DependencyInjection\LocationExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class LocationBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new LocationExtension();
    }
}