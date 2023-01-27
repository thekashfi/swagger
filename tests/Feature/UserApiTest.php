<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function install_test_env()
    {
        $response = $this->get('/');

        $user = User::factory()->create();
        $this->assertDatabaseCount('users', 1);
    }
}
