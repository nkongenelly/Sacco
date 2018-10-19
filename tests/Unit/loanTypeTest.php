<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\LoanType;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      
        $loanType = Loan_type::all()->toArray();

      
        $this->assertEquals([
            [
                "id" => 1,
                "loan_type_name" => "emergency",
                "maximum_loan_amount" => null,
                "custom_loan_amount" => null,
                "maximum_number_of_installments" => null,
                "custom_number_of_installments" => null,
                "maximum_number_of_guarantors" => null,
                "minimum_number_of_guarantors" => null,
                "custom_number_of_guarantors" => null,
                "interest_rate" => null,
                "deleted" => 0,
                "deleted_on" => null,
                "deleted_by" => null,
                "created_by" => null,
                "created_at" => null,
                "updated_at" => null,
              ],
        [
            "id" => 2,
            "loan_type_name" => "development",
            "maximum_loan_amount" => null,
            "custom_loan_amount" => null,
            "maximum_number_of_installments" => null,
            "custom_number_of_installments" => null,
            "maximum_number_of_guarantors" => null,
            "minimum_number_of_guarantors" => null,
            "custom_number_of_guarantors" => null,
            "interest_rate" => null,
            "deleted" => 0,
            "deleted_on" => null,
            "deleted_by" => null,
            "created_by" => null,
            "created_at" => null,
            "updated_at" => null,
          ],
    ],$loanType
        );

        
    }
}
