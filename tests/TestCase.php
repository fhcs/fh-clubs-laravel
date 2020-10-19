<?php


namespace Fh\Clubs\Tests;


use Fh\Clubs\FhClubsProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate', ['--database' => 'testing']);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
    }

    protected function getPackageProviders($app)
    {
        return [
            FhClubsProvider::class
        ];
    }
}
