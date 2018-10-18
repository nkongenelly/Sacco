<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_name',50 )->nullable();
            $table->string('bank_code',50)->nullable();
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
       DB::table('banks')->insert(array(
            ['bank_name'=>'KENYA COMMERCIAL BANK LTD','bank_code'=>'01089'],
           ['bank_name'=>'STANDARD CHARTERED','bank_code'=>'02004'],
           ['bank_name'=>'BARCLAYS BANK OF KENYA LIMITED','bank_code'=>'03001'],
           ['bank_name'=>'COMMERCIAL BANK OF AFRICA LTD','bank_code'=>'07000'],
           ['bank_name'=>'CO-­‐OPERATIVE BANK','bank_code'=>'11000'],
           ['bank_name'=>'NATIONAL BANK OF KENYA','bank_code'=>'12001'],
           ['bank_name'=>'CONSOLIDATED BANK OF KENYA LTD','bank_code'=>'23000'],
           ['bank_name'=>'CHASE BANK (KENYA) LIMITED','bank_code'=>'30001'],
           ['bank_name'=>'EQUITY BANK','bank_code'=>'68001'],
           ['bank_name'=>'FAMILY BANK LTD','bank_code'=>'70000'],

       ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
