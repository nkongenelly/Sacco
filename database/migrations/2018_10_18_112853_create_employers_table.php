<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('employer_name', 50);
            $table->string('employer_email', 50)->nullable();
            $table->string('employer_phone_number', 50)->nullable();
            $table->string('employer_postal_address')->nullable();
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
        DB::table('employers')->insert(array(
            ['employer_name' => 'kisima'],
            ['employer_name' => 'borana'],

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
