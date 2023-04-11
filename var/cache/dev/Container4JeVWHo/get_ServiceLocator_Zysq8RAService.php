<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zysq8RAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zysq8RA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zysq8RA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'icon' => ['privates', '.errored..service_locator.zysq8RA.App\\Entity\\Icon', NULL, 'Cannot autowire service ".service_locator.zysq8RA": it references class "App\\Entity\\Icon" but no such service exists.'],
            'iconRepository' => ['privates', 'App\\Repository\\IconRepository', 'getIconRepositoryService', true],
        ], [
            'icon' => 'App\\Entity\\Icon',
            'iconRepository' => 'App\\Repository\\IconRepository',
        ]);
    }
}
