<?php
namespace tests\quality;

use extas\components\quality\indexes\Index;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

/**
 * Class IndexTest
 *
 * @package tests\quality
 * @author jeyroik <jeyroik@gmail.com>
 */
class IndexTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
    }

    public function testBasicMethods()
    {
        $time = time();
        $index = new Index();
        $index->setIndexMonth(202006)
            ->setIndexTimestamp($time)
            ->setIndexValue(10)
            ->setUserName('test');

        $this->assertEquals(
            10 + 202006 + $time,
            $index->getIndexMonth() + $index->getIndexTimestamp() + $index->getIndexValue()
        );
        $this->assertEquals('test', $index->getUserName());
    }
}
