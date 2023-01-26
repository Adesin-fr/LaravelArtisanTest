<?php

namespace Tests\Feature;

use App\Models\RegisteredApplication;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtisanTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function ItCreatesAnApplicationRecord()
    {
        $this->withoutExceptionHandling();
        $artisan = $this->artisan("register:application");
        $this->assertDatabaseCount("registered_applications",1);
    }
}
