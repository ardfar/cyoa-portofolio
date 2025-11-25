<?php

namespace Tests\Feature;

use Tests\TestCase;

class MgmtPersonaTest extends TestCase
{
    /**
     * Test that the management persona page returns a successful response.
     */
    public function test_mgmt_persona_page_returns_successful_response(): void
    {
        $response = $this->get('/persona/management');

        $response->assertStatus(200);
        $response->assertSee('Management & Strategy');
        $response->assertSee('Strategic Planning');
        $response->assertSee('Cost Reduction');
        $response->assertSee('Discovery');
        $response->assertSee('farras.');
        $response->assertSee('biz');
    }
}
