<?php

namespace Tests\Feature\Api;

use App\Models\Creator;
use App\User;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RedditTest extends TestCase
{
    use RefreshDatabase;
    protected $endpoint;
    protected $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->endpoint = '/api/v1/reddit';
        $this->user = factory(User::class)->create();
        factory(Creator::class)->create([
            'channel' => 'reddit',
            'channel_id' => '12345'
        ]);
    }

    /** @test */
    public function reddit_api_reject_unauthenticated_call()
    {
        $response = $this->postJson($this->endpoint, ['reddit_id' => '1234']);
        $response->assertStatus(401);
    }

    /** @test */
    public function reddit_api_reject_missing_field()
    {
        Sanctum::actingAs($this->user);
        $response = $this->postJson($this->endpoint, ['dsf' => '1234']);
        $response->assertStatus(422);
        $response->assertJson(['success' => false, 'message' => "Missing required field"]);
    }

    /** @test */
    public function reddit_api_reject_not_found()
    {
        Sanctum::actingAs($this->user);
        $response = $this->postJson($this->endpoint, ['reddit_id' => '1234']);
        $response->assertStatus(404);
        $response->assertJson(['success' => false, 'message' => "Not found"]);
    }

    /** @test */
    public function reddit_api_success()
    {
        Sanctum::actingAs($this->user);
        $response = $this->postJson($this->endpoint, ['reddit_id' => '12345']);
        $response->assertStatus(200);
        $response->assertJson(['success' => true]);
    }
}
