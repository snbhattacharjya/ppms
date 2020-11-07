<?php

namespace Tests\Unit;

use App\Models\BankAccount;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BankAccountTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $bank_account = BankAccount::factory()->create();

        $this->assertDatabaseCount('bank_accounts', 1);
    }
}
