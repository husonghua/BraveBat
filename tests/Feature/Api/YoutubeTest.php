<?php

namespace Tests\Feature\Api;

use App\Models\Creator;
use App\User;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YoutubeTest extends TestCase
{
    use RefreshDatabase;
    protected $endpoint;
    protected $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->endpoint = '/api/v1/youtube';
        $this->user = factory(User::class)->create();
        factory(Creator::class)->create([
            'channel' => 'youtube',
            'channel_id' => '12345',
            'name' => 'hello',
            'description' => 'some description',
            'link' => 'https://youtube.com/12345',
            'follower_count' => 10,
        ]);
    }

    /** @test */
    public function youtube_api_reject_unauthenticated_call()
    {
        $response = $this->postJson($this->endpoint, ['youtube_id' => '1234']);
        $response->assertStatus(401);
    }

    /** @test */
    public function youtube_api_reject_missing_field()
    {
        Sanctum::actingAs($this->user);
        $response = $this->postJson($this->endpoint, ['dsf' => '1234']);
        $response->assertStatus(422);
        $response->assertJson(['success' => false, 'message' => "Missing required field"]);
    }

    /** @test */
    public function youtube_api_reject_not_found()
    {
        Sanctum::actingAs($this->user);
        $response = $this->postJson($this->endpoint, ['youtube_id' => '1234']);
        $response->assertStatus(404);
        $response->assertJson(['success' => false, 'message' => "Not found"]);
    }

    /** @test */
    public function youtube_api_success()
    {
        Sanctum::actingAs($this->user);
        $response = $this->postJson($this->endpoint, ['youtube_id' => '12345']);
        $response->assertStatus(200);
        $response->assertJson(['success' => true, 'data' => [
            'name' => 'hello',
            'description' => 'some description',
            'link' => 'https://youtube.com/12345',
            'subscribers' => 10,
        ]]);
    }
}