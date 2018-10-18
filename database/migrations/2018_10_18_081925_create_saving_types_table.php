<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('savings_type_name',255);
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();;
            $table->integer('created_by')->nullable();;
            $table->timestamps();
        });
        DB::table('saving_types')->insert(array(
            ['savings_type_name'=>'Shared Capital'],
            ['savings_type_name'=>'Share Contribution'],
            ['savings_type_name'=>'Withdrawals']

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_types');
    }
}
