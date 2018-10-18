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
                'maximum_loan_amount'=>null,
                'custom_loan_amount'=>null,
                'maximum_number_of_installments'=>null,
                'custom_number_of_installments'=>null,
                'maximum_number_of_guarantors'=>null,
                'minimum_number_of_guarantors'=>null,
                'custom_number_of_guarantors'=>null,
                'interest_rate'=>null,
                'deleted_on'=>null,

            ]
    ],$loanType
        );

        
    }
}
