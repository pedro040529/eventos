<?php

namespace ContainerJlXgLBt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_ComponentHydratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.component_hydrator' shared service.
     *
     * @return \Symfony\UX\LiveComponent\LiveComponentHydrator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LiveComponentHydrator.php';

        return $container->privates['ux.live_component.component_hydrator'] = new \Symfony\UX\LiveComponent\LiveComponentHydrator(($container->privates['debug.serializer'] ?? $container->load('getDebug_SerializerService')), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), $container->getEnv('APP_SECRET'));
    }
}
