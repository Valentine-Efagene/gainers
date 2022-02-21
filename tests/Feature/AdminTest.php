<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login_route()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }
}
