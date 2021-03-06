<?php
declare(strict_types=1);

namespace MagentoJapan\Price\Test\Unit\Model\Config\Source;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class RoundTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Round configuration class.
     *
     * @var \MagentoJapan\Price\Model\Config\Source\Round
     */
    protected $model;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        $objectManager = new ObjectManager($this);

        $this->model = $objectManager->getObject(\MagentoJapan\Price\Model\Config\Source\Round::class);
    }

    /**
     * Test toOptionArray
     *
     * @return void
     */
    public function testToOptionArray()
    {
        $this->assertArrayHasKey('round', $this->model->toOptionArray());
    }
}
