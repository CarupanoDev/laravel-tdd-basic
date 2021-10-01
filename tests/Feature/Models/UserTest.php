<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase; // migrate

    public function test_user()
    {
        //Process

        User::factory()->create([
            'email' => 'carupanodev@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'carupanodev@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'doesnotexist@gmail.com'
        ]);
    }
}
