<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testServices()
    {
        $response = $this ->get('services');
        $response-> assertStatus(200);
    }

    public function restservice()
    {
        $response = $this ->get('api/restservice');
        $response-> assertStatus(200);
    }
}
