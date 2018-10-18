<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

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
            $table->string('user_first_name',255)->default('Admin');
            $table->string('user_last_name',255)->default('Kisborana');
            $table->string('user_email')->unique()->nullable()->default('adminkisborana@gmail.com');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_password',255)->default();
            $table->tinyInteger('user_status')->default(1);
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->string('deleted_by')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(array(
            // ['user_first_name'=>'Admin'],
            // ['user_last_name'=>'KisBorana'],
            // ['user_email'=>'adminkisborana@gmail.com'],
            ['user_password'=> Hash::make('admin')]
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
