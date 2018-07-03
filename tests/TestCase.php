<?php

namespace WuJunze\MoneyWrapper\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \WuJunze\MoneyWrapper\MoneyWrapperServiceProvider::class,
        ];
    }
}
