<?php

namespace Container4JeVWHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BaCpOE4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BaCpOE4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BaCpOE4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'case' => ['privates', '.errored..service_locator.BaCpOE4.App\\Entity\\Cases', NULL, 'Cannot autowire service ".service_locator.BaCpOE4": it references class "App\\Entity\\Cases" but no such service exists.'],
            'casesRepository' => ['privates', 'App\\Repository\\CasesRepository', 'getCasesRepositoryService', true],
        ], [
            'case' => 'App\\Entity\\Cases',
            'casesRepository' => 'App\\Repository\\CasesRepository',
        ]);
    }
}
