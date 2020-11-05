<?php

namespace Tests\Unit;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_an_employee_can_be_added()
    {
        $employee = Employee::factory()->create();

        $this->assertDatabaseCount('employees', 1);
    }
}
