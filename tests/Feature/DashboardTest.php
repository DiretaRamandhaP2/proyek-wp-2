<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_dashboard_is_displayed(): void
    {
        $this->get(route('dashboard'))
            ->assertOk()
            ->assertSee('Dashboard');
    }
}
