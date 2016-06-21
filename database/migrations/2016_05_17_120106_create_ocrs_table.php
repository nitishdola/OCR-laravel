<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('designation',127);
            $table->string('email',127);
            $table->string('phone', 30);
            $table->string('fax', 30);
            $table->string('vc_path');
            $table->integer('directory_id', false, true);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('directory_id')->references('id')->on('directories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ocrs');
    }
}
