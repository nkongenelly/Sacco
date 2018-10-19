<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bank_id');
            $table->string('branch_name');
            $table->integer('bank_branch_status');
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by');
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
        Schema::dropIfExists('bank_branches');
    }
}
