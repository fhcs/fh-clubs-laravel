<?php

namespace Fh\Clubs\Tests\Models;

use Fh\Clubs\Models\City;
use Fh\Clubs\Models\Club;
use Fh\Clubs\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

class ClubTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_club_at_database(): void
    {
        $club = factory(Club::class)->create();
        $this->assertDatabaseHas('clubs', $club->toArray());

        $this->assertEquals('id', $club->getKeyName());
    }

    /**
     * @test
     */
    public function it_can_be_set_name_alias_slug(): void
    {
        $club = factory(Club::class)->create();
        $this->assertEquals($club->alias, Str::slug($club->name));
    }

    /**
     * @test
     */
    public function it_can_be_belong_to_city(): void
    {
        $city = factory(City::class)->create();
        $club = factory(Club::class)->create([
            'city_id' => $city->id
        ]);

        $this->assertInstanceOf(City::class, $club->city);
        $this->assertEquals($club->city->id, $city->id);
    }
}
