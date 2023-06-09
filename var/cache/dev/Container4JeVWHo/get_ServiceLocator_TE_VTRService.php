<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TE_VTRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tE.vT_r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tE.vT_r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'propertyRepository' => ['privates', 'App\\Repository\\PropertyRepository', 'getPropertyRepositoryService', true],
        ], [
            'propertyRepository' => 'App\\Repository\\PropertyRepository',
        ]);
    }
}
