<?php

use Tests\TestCase;

class PersonaControllerTest extends TestCase
{
    /**
     * Test that the gateway page loads successfully.
     */
    public function test_gateway_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('gateway');
        $response->assertSee('Halo, saya');
        $response->assertSee('Technology & Engineering');
        $response->assertSee('Management & Strategy');
        $response->assertSee('Operations & Creative');
    }

    /**
     * Test that persona content can be loaded via AJAX.
     */
    public function test_persona_content_loads_successfully(): void
    {
        $response = $this->get('/persona/tech');

        $response->assertStatus(200);
        $response->assertViewIs('personas.tech');
        $response->assertSee('Technology');
        $response->assertSee('Engineering');
    }

    /**
     * Test that invalid persona returns 404.
     */
    public function test_invalid_persona_returns_404(): void
    {
        $response = $this->get('/persona/invalid');

        $response->assertStatus(404);
    }

    /**
     * Test that resume page loads successfully.
     */
    public function test_resume_page_loads_successfully(): void
    {
        $response = $this->get('/resume');

        $response->assertStatus(200);
        $response->assertViewIs('resume');
        $response->assertSee('Ringkasan Profesional');
        $response->assertSee('Full Stack Developer');
        $response->assertSee('AI/ML Engineer');
    }

    /**
     * Test that contact page loads successfully.
     */
    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contact');
        $response->assertSee('Hubungi Saya');
        $response->assertSee('Kirim Pesan');
    }

    /**
     * Test that gateway page shows correct persona data.
     */
    public function test_gateway_page_shows_persona_data(): void
    {
        $response = $this->get('/');

        $response->assertViewHas('personas');
        $personas = $response->viewData('personas');

        $this->assertIsArray($personas);
        $this->assertArrayHasKey('tech', $personas);
        $this->assertArrayHasKey('management', $personas);
        $this->assertArrayHasKey('operations', $personas);

        $this->assertEquals('Technology & Engineering', $personas['tech']['name']);
        $this->assertEquals('Management & Strategy', $personas['management']['name']);
        $this->assertEquals('Operations & Creative', $personas['operations']['name']);
    }

    /**
     * Test that persona parameter is passed correctly.
     */
    public function test_persona_parameter_passed_correctly(): void
    {
        $response = $this->get('/?persona=tech');

        $response->assertStatus(200);
        $response->assertViewHas('activePersona', 'tech');
    }
}
