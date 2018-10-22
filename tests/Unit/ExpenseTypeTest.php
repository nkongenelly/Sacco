<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Expense_type;

class ExpenseTypeTest extends TestCase
{
    // use DatabaseTransaction;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       
        //given 

        //when 
        $expense_type = Expense_type::pluck('expense_type_name')->toArray();


        //then
        $this->assertEquals([
            'Normal expenses',
            'Petty cash',
            
    ],$expense_type
        );
    }
}
