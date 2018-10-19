<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\LoanStatus;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      
        $loanstatus = Loan_status::pluck('loan_status_name')->toArray();

      
        $this->assertEquals(
            [
                "applied",
                "approved",
                "disbursed",
                "paid",
              ]
    ,$loanstatus
        );

        
    }
}
