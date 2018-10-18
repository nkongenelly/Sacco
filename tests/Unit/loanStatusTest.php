<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Loan_status;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      
        $loanstatus = Loan_status::all();

      
        $this->assertEquals([
            ['loan_status_name' => 'applied',
                'loan_status_name' => 'approved',
                'loan_status_name' => 'disbursed',
                'loan_status_name' => 'paid',
                'deleted' => 0,
                'deleted_on'=>null,
                'deleted_by'=>null,
                'created_by'=>null,
                'created_at'=>null,
                'updated_at'=>null,

            ]
    ],$loanstatus
        );

        
    }
}
