<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Role;

class RoleTest extends TestCase
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
        $role = Role::pluck('role_name')->toArray();

        //then 
        $this->assertEquals( [
            "Admin",
            "Official",
          ], $role
        );
    }
}
