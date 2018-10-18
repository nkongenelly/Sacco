<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //given I want to login

        //when I login. When i query the user table
        $user = User::all();

        //then default user will login without registeation. The user able will have a default user.
        $this->assertEquals([
            ['user_first_name'=>'Admin',
                'user_last_name'=>'kisBorana',
                'user_email'=>'adminkisborana@gmail.com'
            ]
    ],$user
        );

        
    }
}
