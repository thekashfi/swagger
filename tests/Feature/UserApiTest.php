<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function get_single_user()
    {
        $user = User::factory()->create();
        $this->json('get', 'api/v1/user')
            ->assertStatus(200)
            ->assertJson([
                'name' => $user->name,
                'email' => $user->email,
            ]);
    }

    /** @test */
    public function get_10_users()
    {
        $user = User::factory()->count(10)->create();
        $this->json('get', 'api/v1/users')
             ->assertStatus(200)
             ->assertJsonCount(10);
    }
}
