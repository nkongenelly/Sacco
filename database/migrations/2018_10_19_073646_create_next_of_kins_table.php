<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextOfKinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_of_kins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->nullable();
            $table->string('next_of_kin_first_name', 100)->nullable();
            $table->string('next_of_kin_last_name', 100)->nullable();
            $table->string('next_of_kin_national_id', 100)->nullable();
            $table->string('next_of_kin_phone_number', 20)->nullable();
            $table->string('next_of_kin_email', 100)->unique()->nullable();
            $table->string('next_of_kin_location', 100)->nullable();            
            $table->integer('created_by')->nullable();
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('next_of_kins');
    }
}
