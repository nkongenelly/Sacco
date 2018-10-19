<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanDefaultersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_defaulters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('default_period_id');
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('loan_defaulters');
    }
}
