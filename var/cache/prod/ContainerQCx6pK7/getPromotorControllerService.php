<?php

namespace ContainerQCx6pK7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotorControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PromotorController' shared autowired service.
     *
     * @return \App\Controller\PromotorController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PromotorController'] = $instance = new \App\Controller\PromotorController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PromotorController', $container));

        return $instance;
    }
}
