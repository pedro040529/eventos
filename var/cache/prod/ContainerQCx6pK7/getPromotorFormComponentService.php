<?php

namespace ContainerQCx6pK7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotorFormComponentService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Twig\Components\PromotorFormComponent' autowired service.
     *
     * @return \App\Twig\Components\PromotorFormComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['App\\Twig\\Components\\PromotorFormComponent'] = function () use ($container) {
            $instance = new \App\Twig\Components\PromotorFormComponent();

            $instance->setContainer(($container->privates['.service_locator.CshazM0.App\\Twig\\Components\\PromotorFormComponent'] ?? $container->load('getPromotorFormComponent2Service')));

            return $instance;
        };

        return $container->factories['App\\Twig\\Components\\PromotorFormComponent']();
    }
}