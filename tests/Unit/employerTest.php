<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Employer;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      
        $employer = Employer::pluck('employer_name')->toArray();

      
        $this->assertEquals(
            [
                "kisima",
                "borana",
              ]
    ,$employer
        );

        
    }
}
