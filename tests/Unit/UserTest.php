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
    public function testUserExists()
    {
        //given I want to login

        //when I login. When i query the user table
        $user = User::all()->toArray();

        //then default user will login without registeation. The user able will have a default user.
        $this->assertEquals([
            ['user_first_name'=>'Admin',
                'user_last_name'=>'Kisborana',
                'user_email'=>'adminkisborana@gmail.com',
                'id' => 1,
                'email_verified_at' => null,
                'user_password' => '$2y$10$rxUG6QajfLbycPCqM5eDLOds0itOp9OJBFFw5g6PBaMK.WkgeIYe6',
                'user_status' => 1,
                'deleted' => 0,
                'deleted_on' => null,
                'deleted_by' => null,
                'created_by' => null,
                'created_at' => null,
                'updated_at' => null
            ]
    ],$user
        );

        
    }
}
