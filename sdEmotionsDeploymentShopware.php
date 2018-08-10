<?php

namespace sdEmotionsDeploymentShopware;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * Shopware-Plugin sdEmotionsDeploymentShopware.
 */
class sdEmotionsDeploymentShopware extends Plugin
{

    /**
    * @param ContainerBuilder $container
    */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('sdemotionsdeploymentshopware.plugin_dir', $this->getPath());
        parent::build($container);
    }
}
