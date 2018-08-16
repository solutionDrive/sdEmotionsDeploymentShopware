<?php

namespace sdEmotionsDeploymentShopware\Tests;

use sdEmotionsDeploymentShopware\sdEmotionsDeploymentShopware as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'sdEmotionsDeploymentShopware' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['sdEmotionsDeploymentShopware'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}
