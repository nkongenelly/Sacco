<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loan_type_name',255);
            $table->double('maximum_loan_amount')->nullable();
            $table->string('custom_loan_amount')->nullable();
            $table->integer('maximum_number_of_installments')->nullable();
            $table->integer('custom_number_of_installments')->nullable();
            $table->integer('maximum_number_of_guarantors')->nullable();
            $table->integer('minimum_number_of_guarantors')->nullable();
            $table->integer('custom_number_of_guarantors')->nullable();
            $table->double('interest_rate')->nullable();
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
        DB::table('loan_types')->insert(
            array(
                ['loan_type_name' => 'emergency'],
                ['loan_type_name' => 'development'],
               
                
  ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_types');
    }
}
