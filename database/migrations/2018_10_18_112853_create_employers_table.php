<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer_name');
            $table->string('employer_email');
            $table->string('employer_phone_number');
            $table->string('employer_postal_address');
            $table->integer('deleted');
            $table->timestamps('deleted_on');
            $table->integer('deleted_by');
            $table->integer('created_by');
            $table->timestamps();
        });
        DB::table('default_periods')->insert(array(
            ['employer_name'=>'kisima'],
            ['employer_name'=>'borana'],
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
