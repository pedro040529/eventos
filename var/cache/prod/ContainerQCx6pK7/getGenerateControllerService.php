<?php

namespace ContainerQCx6pK7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Endroid\QrCodeBundle\Controller\GenerateController' shared autowired service.
     *
     * @return \Endroid\QrCodeBundle\Controller\GenerateController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Endroid\\QrCodeBundle\\Controller\\GenerateController'] = new \Endroid\QrCodeBundle\Controller\GenerateController(($container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] ?? $container->load('getBuilderRegistryService')));
    }
}
