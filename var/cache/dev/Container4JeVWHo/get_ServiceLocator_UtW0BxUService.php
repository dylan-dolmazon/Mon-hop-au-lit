<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UtW0BxUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.utW0BxU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.utW0BxU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'luck' => ['privates', '.errored..service_locator.utW0BxU.App\\Entity\\Luck', NULL, 'Cannot autowire service ".service_locator.utW0BxU": it references class "App\\Entity\\Luck" but no such service exists.'],
        ], [
            'luck' => 'App\\Entity\\Luck',
        ]);
    }
}
