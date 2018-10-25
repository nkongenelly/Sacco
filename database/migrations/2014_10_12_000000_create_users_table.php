<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_first_name', 255)->default('Admin');
            $table->string('user_last_name', 255)->default('Kisborana');
            $table->string('email')->unique()->nullable()->default('adminkisborana@gmail.com');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('role', 50)->default('admin');
            $table->tinyInteger('user_status')->default(1);
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->string('deleted_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(array(
          
            ['password' => Hash::make('admin')],
            
            
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
