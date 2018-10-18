<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\DefaultPeriod;

class DefaultPeriods extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDefaultPeriodExists()
    {
        //given I want to login

        //when I login. When i query the user table
        $period = DefaultPeriod::pluck('default_period')->toArray();

        //then default user will login without registeation. The user able will have a default user.
        $this->assertEquals([
             0 => '30',
            1 => '60',
            2 => '90',
            3 => '>90'
                
            
    ],$period
        );
    }
}
