<?php

namespace ContainerJlXgLBt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zdu7cYmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zdu7cYm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zdu7cYm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'img' => ['services', 'knp_snappy.image', 'getKnpSnappy_ImageService', true],
        ], [
            'entityManager' => '?',
            'img' => '?',
        ]);
    }
}
