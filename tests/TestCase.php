<?php


namespace Fh\Clubs\Tests;


use Fh\Clubs\FhClubsProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FhClubsProvider::class
        ];
    }
}
