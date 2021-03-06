<?php

namespace Slince\Shopify\Tests\Product;

use Slince\Shopify\Manager\ProductVariant\VariantManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class VariantManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'ProductVariant';
    }

    public function getServiceClass()
    {
        return VariantManager::class;
    }

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $article = $service->find(1);
        $this->assertInstanceOf($service->getModelClass(), $article);
    }
}