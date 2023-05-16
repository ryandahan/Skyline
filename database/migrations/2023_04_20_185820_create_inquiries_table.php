<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 255)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('height')->nullable();
            $table->string('fabricType')->nullable();
            $table->string('backPiece')->nullable();
            $table->string('corners')->nullable();
            $table->string('pillowLook')->nullable();
            $table->string('pillowTop')->nullable();
            $table->string('armRest')->nullable();
            $table->string('halfCircleFront')->nullable();
            $table->string('designColor')->nullable();
            $table->string('woodColor')->nullable();
            $table->string('typeOfFurniture')->nullable();
            $table->string('note', 1000)->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_read')->nullable()->default('0');

        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inquiries');
    }
}
