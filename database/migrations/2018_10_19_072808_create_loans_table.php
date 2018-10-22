<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_type_id');
            $table->integer('member_id');
            $table->integer('loan_status_id');
            $table->double('loan_amount', 10);
            $table->double('proposed_amount', 11);
            $table->integer('grace_period');
            $table->integer('loan_installments');
            $table->timestamp('application_date')->nullable();
            $table->timestamp('approved_date')->nullable();
            $table->timestamp('disbursed_date')->nullable();
            $table->integer('approved_by')->nullable();
            $table->integer('disbursed_by')->nullable();
            $table->double('interest_rate');
            $table->double('proposed_repayment_amount', 11)->nullable();
            $table->double('repayment_amount', 11)->nullable();
            $table->string('loan_number', 255);
            $table->string('bank_code', 50);
            $table->double('member_salary', 11)->nullable();
            $table->integer('member_loan_cleared')->default(0);
            $table->integer('deleted')->default(0);
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
        Schema::dropIfExists('loans');
    }
}
