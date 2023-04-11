<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5cRbxe7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5cRbxe7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5cRbxe7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stationRepository' => ['privates', 'App\\Repository\\StationRepository', 'getStationRepositoryService', true],
        ], [
            'stationRepository' => 'App\\Repository\\StationRepository',
        ]);
    }
}
