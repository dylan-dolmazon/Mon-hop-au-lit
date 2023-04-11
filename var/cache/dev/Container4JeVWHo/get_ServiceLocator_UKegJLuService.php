<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UKegJLuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uKegJLu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uKegJLu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cases' => ['privates', '.errored..service_locator.uKegJLu.App\\Entity\\Cases', NULL, 'Cannot autowire service ".service_locator.uKegJLu": it references class "App\\Entity\\Cases" but no such service exists.'],
            'casesRepository' => ['privates', 'App\\Repository\\CasesRepository', 'getCasesRepositoryService', true],
            'playerRepository' => ['privates', 'App\\Repository\\PlayerRepository', 'getPlayerRepositoryService', true],
        ], [
            'cases' => 'App\\Entity\\Cases',
            'casesRepository' => 'App\\Repository\\CasesRepository',
            'playerRepository' => 'App\\Repository\\PlayerRepository',
        ]);
    }
}
