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
            $table->string('employer_email')->nullable();
            $table->string('employer_phone_number')->nullable();
            $table->string('employer_postal_address')->nullable();
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
        DB::table('employers')->insert(array(
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
