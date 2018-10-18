<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\DefaultPeriod;

class DefaultPeriodTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDefaultPeriodExists()
    {
        //given I want to default_period table to have default periods values

        // When I query the default_period table
        $period = DefaultPeriod::pluck('default_period')->toArray();

        //then default_period values should have the following
        $this->assertEquals([
             0 => '30',
            1 => '60',
            2 => '90',
            3 => '>90'
                
            
    ],$period
        );
    }
}
