<?php

namespace CrCms\Microservice\Tests;

use CrCms\Microservice\Foundation\Application;

trait ApplicationTrait
{
    /**
     * @var Application
     */
    public static $app;

    /**
     * setUpBeforeClass.
     *
     * @return void
     */
    public static function setUpBeforeClass()
    {
        // TODO: Change the autogenerated stub
        parent::setUpBeforeClass();

        static::$app = forkApp();
    }

    /**
     * tearDownAfterClass.
     *
     * @return void
     */
    public static function tearDownAfterClass()
    {
        // TODO: Change the autogenerated stub
        parent::tearDownAfterClass();

        static::$app = null;
    }
}
