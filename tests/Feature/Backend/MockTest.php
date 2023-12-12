<?php

namespace Tests\Feature\Backend;

use App\Domains\Auth\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class DashboardTest.
 */
class MockTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testing_the_test_controller_index()
    {
        $this->get('/test')->assertOk();
    }
}
