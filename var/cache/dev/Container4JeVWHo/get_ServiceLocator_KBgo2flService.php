<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KBgo2flService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kBgo2fl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kBgo2fl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeRepository' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService', true],
        ], [
            'typeRepository' => 'App\\Repository\\TypeRepository',
        ]);
    }
}
