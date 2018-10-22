<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->nullable();
            $table->integer('bank_id')->nullable();
            $table->string('member_national_id', 100)->nullable();
            $table->string('member_first_name', 100)->nullable();
            $table->string('member_last_name', 100)->nullable();
            $table->string('member_email', 100)->unique()->nullable();
            $table->string('member_phone_number', 20)->nullable();
            $table->string('member_bank_account_number', 50)->nullable();
            $table->string('member_postal_address', 100)->nullable();
            $table->string('member_postal_code', 50)->nullable();
            $table->string('member_location', 100)->nullable();
            $table->string('member_number', 50)->nullable();
            $table->string('member_payroll_number', 50)->nullable();
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
        Schema::dropIfExists('members');
    }
}
