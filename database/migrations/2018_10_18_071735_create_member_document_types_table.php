<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDocumentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_document_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_type_name');
            $table->integer('deleted')->default(0);
            $table->timestamp('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });

        DB::table('member_document_types')->insert(
            array(
                ['document_type_name' => 'National Id Card'],
                ['document_type_name' => 'Passport Photo'],

            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_document_types');
    }
}
