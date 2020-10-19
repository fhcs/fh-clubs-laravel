<?php

namespace Fh\Clubs\Tests\Models;

use Fh\Clubs\Models\Club;
use Fh\Clubs\Models\ClubType;
use Fh\Clubs\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClubTypeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_club_type_at_database(): void
    {
        $clubType = factory(ClubType::class)->create();
        $this->assertDatabaseHas('club_types', $clubType->toArray());
    }

    /**
     * @test
     */
    public function it_can_be_has_many_clubs(): void
    {
        $clubType = factory(ClubType::class)->create();
        $clubType->clubs()->createMany(
            factory(Club::class, 10)->make()->toArray()
        );

        $this->assertCount(10, $clubType->clubs);
        $this->assertInstanceOf(Club::class, $clubType->clubs->first());
        $this->assertEquals($clubType->id, $clubType->clubs->first()->type_id);
    }
}
