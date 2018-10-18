<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Banks;

class BanksTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBanksExist()
    {
        //given The bank names and branches

        // When I query the banks table
        $banks = Banks::pluck('bank_name','bank_code')->toArray();

        //then banks values should have the following names
        $this->assertEquals([
            "01089" => "KENYA COMMERCIAL BANK LTD",
       "02004" => "STANDARD CHARTERED",
       "03001" => "BARCLAYS BANK OF KENYA LIMITED",
       "07000" => "COMMERCIAL BANK OF AFRICA LTD",
       "11000" => "CO-­‐OPERATIVE BANK",
       "12001" => "NATIONAL BANK OF KENYA",
       "23000" => "CONSOLIDATED BANK OF KENYA LTD",
       "30001" => "CHASE BANK (KENYA) LIMITED",
       "68001" => "EQUITY BANK",
       "70000" => "FAMILY BANK LTD",
                
            
    ],$banks
        );
    
}
}