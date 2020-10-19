<?php


namespace Fh\Clubs\Tests\Models;


use Fh\Clubs\Models\City;
use Fh\Clubs\Models\Club;
use Fh\Clubs\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CityTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_city_at_database(): void
    {
        $city = factory(City::class)->create();
        $this->assertDatabaseHas('cities', $city->toArray());
    }

    /**
     * @test
     */
    public function it_can_be_has_many_clubs(): void
    {
        $city = factory(City::class)->create();
        $city->clubs()->createMany(
            factory(Club::class, 10)->make()->toArray()
        );

        $this->assertCount(10, $city->clubs);
        $this->assertInstanceOf(Club::class, $city->clubs->first());
        $this->assertEquals($city->id, $city->clubs->first()->city_id);
    }
}