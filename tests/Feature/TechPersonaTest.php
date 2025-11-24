<?php

namespace Tests\Feature;

use Tests\TestCase;

class TechPersonaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_tech_persona_page_returns_successful_response(): void
    {
        $response = $this->get('/persona/tech');

        $response->assertStatus(200);
        $response->assertSee('Technology & Engineering');
        $response->assertSee('01_BACKEND');
        $response->assertSee('Laravel');
    }
}
