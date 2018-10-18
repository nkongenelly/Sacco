<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Loan_type;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      
        $loanType = Loan_type::all();

      
        $this->assertEquals([
            ['loan_type_name'=>'emergency',
                'loan_type_name'=>'development',
                'deleted'=>0,
            ]
    ],$loanType
        );

        
    }
}
