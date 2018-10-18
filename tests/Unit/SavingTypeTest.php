<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\SavingType;

class SavingTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSavingTypeExist()
    {
        //given The loan saving types

        // When I query the saving_types table
        $savingtypes = SavingType::pluck('savings_type_name')->toArray();

        //then savings_type_name values should have the following names
        $this->assertEquals([
            0 => "Shared Capital",
            1 => "Share Contribution",
            2 => "Withdrawals"
                
            
    ],$savingtypes
        );
    
}
}