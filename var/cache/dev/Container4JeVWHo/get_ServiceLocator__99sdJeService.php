<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__99sdJeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..99sdJe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..99sdJe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'icon' => ['privates', '.errored..service_locator..99sdJe.App\\Entity\\Icon', NULL, 'Cannot autowire service ".service_locator..99sdJe": it references class "App\\Entity\\Icon" but no such service exists.'],
        ], [
            'icon' => 'App\\Entity\\Icon',
        ]);
    }
}
