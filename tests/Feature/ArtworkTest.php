<?php

namespace Tests\Feature;

use App\Models\Artwork;
use App\Models\User;
use Database\Factories\ArtworkFactory;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArtworkTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user =  User::factory(6)->create();
        $this->artwork = Artwork::factory(1)->create()->first();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * a test to ensure that title is set.
     *
     * @return void
     */
    public function test_artwork_has_title()
    {
        self::assertNotEmpty($this->artwork->id);
    }

    /**
     * a test to ensure that title is set.
     *
     * @return void
     */
    public function test_artwork_has_description()
    {
        self::assertNotEmpty($this->artwork->description);
    }

    /**
     * a test to ensure that title is set.
     *
     * @return void
     */
    public function test_artwork_has_user()
    {
        self::assertNotEmpty($this->artwork->user_id);
    }

}
