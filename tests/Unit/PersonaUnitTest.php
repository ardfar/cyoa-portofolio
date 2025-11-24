<?php

use Tests\TestCase;

class PersonaUnitTest extends TestCase
{
    /**
     * Test that persona configuration is properly structured.
     */
    public function test_persona_configuration_structure(): void
    {
        $controller = new \App\Http\Controllers\PersonaController;

        // Use reflection to test private method
        $reflection = new ReflectionClass($controller);
        $method = $reflection->getMethod('getPersonas');
        $method->setAccessible(true);

        $personas = $method->invoke($controller);

        $this->assertIsArray($personas);
        $this->assertCount(3, $personas);

        // Test each persona has required keys
        foreach ($personas as $persona) {
            $this->assertArrayHasKey('id', $persona);
            $this->assertArrayHasKey('name', $persona);
            $this->assertArrayHasKey('headline', $persona);
            $this->assertArrayHasKey('description', $persona);
            $this->assertArrayHasKey('roles', $persona);
            $this->assertArrayHasKey('theme', $persona);
            $this->assertArrayHasKey('accent_color', $persona);

            $this->assertIsArray($persona['roles']);
            $this->assertNotEmpty($persona['roles']);
        }
    }

    /**
     * Test that all roles configuration is properly structured.
     */
    public function test_all_roles_configuration_structure(): void
    {
        $controller = new \App\Http\Controllers\PersonaController;

        // Use reflection to test private method
        $reflection = new ReflectionClass($controller);
        $method = $reflection->getMethod('getAllRoles');
        $method->setAccessible(true);

        $roles = $method->invoke($controller);

        $this->assertIsArray($roles);
        $this->assertCount(8, $roles); // Should have all 8 roles

        // Test each role has required keys
        foreach ($roles as $role) {
            $this->assertArrayHasKey('title', $role);
            $this->assertArrayHasKey('category', $role);
            $this->assertArrayHasKey('skills', $role);
            $this->assertArrayHasKey('description', $role);

            $this->assertIsArray($role['skills']);
            $this->assertNotEmpty($role['skills']);
            $this->assertNotEmpty($role['description']);
        }
    }

    /**
     * Test persona roles mapping to categories.
     */
    public function test_persona_roles_mapping(): void
    {
        $controller = new \App\Http\Controllers\PersonaController;

        $reflection = new ReflectionClass($controller);
        $personasMethod = $reflection->getMethod('getPersonas');
        $personasMethod->setAccessible(true);
        $allRolesMethod = $reflection->getMethod('getAllRoles');
        $allRolesMethod->setAccessible(true);

        $personas = $personasMethod->invoke($controller);
        $allRoles = $allRolesMethod->invoke($controller);

        // Test that each persona's roles exist in allRoles
        foreach ($personas as $persona) {
            foreach ($persona['roles'] as $roleName) {
                $roleExists = false;
                foreach ($allRoles as $role) {
                    if ($role['title'] === $roleName) {
                        $roleExists = true;
                        break;
                    }
                }
                $this->assertTrue($roleExists, "Role '{$roleName}' should exist in allRoles configuration");
            }
        }
    }
}
