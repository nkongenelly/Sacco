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
      
        $employer = Employer::all();

      
        $this->assertEquals([
            ['employer_name' => 'kisima',
                'employer_name' => 'borana',
                'employer_email' => null,
                'employer_phone_number' => null,
                'employer_postal_address'=>null,
                'deleted'=>0,
                'deleted_on'=>null,
                'deleted_by'=>null,
                'created_by'=>null,
                'created_at'=>null,
                'updated_at'=>null                

            ]
    ],$employer
        );

        
    }
}
