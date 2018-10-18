<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_periods', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('default_period',50);
            $table->string('deleted',11)->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->string('deleted_by',11)->nullable();
            $table->string('created_by',11)->nullable();
            $table->timestamps();
        });
        DB::table('default_periods')->insert(array(
            ['default_period'=>'30'],
            ['default_period'=>'60'],
            ['default_period'=>'90'],
            ['default_period'=>'>90']
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('default_periods');
    }
}
