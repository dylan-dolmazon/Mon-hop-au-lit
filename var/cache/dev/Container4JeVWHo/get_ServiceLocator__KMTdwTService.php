<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__KMTdwTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..KMTdwT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..KMTdwT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'case' => ['privates', '.errored..service_locator..KMTdwT.App\\Entity\\Cases', NULL, 'Cannot autowire service ".service_locator..KMTdwT": it references class "App\\Entity\\Cases" but no such service exists.'],
            'player' => ['privates', '.errored..service_locator..KMTdwT.App\\Entity\\Player', NULL, 'Cannot autowire service ".service_locator..KMTdwT": it references class "App\\Entity\\Player" but no such service exists.'],
            'playerRepository' => ['privates', 'App\\Repository\\PlayerRepository', 'getPlayerRepositoryService', true],
        ], [
            'case' => 'App\\Entity\\Cases',
            'player' => 'App\\Entity\\Player',
            'playerRepository' => 'App\\Repository\\PlayerRepository',
        ]);
    }
}