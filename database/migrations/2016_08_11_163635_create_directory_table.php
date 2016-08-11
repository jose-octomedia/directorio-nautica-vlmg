<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index();
            $table->string('name');
            $table->text('address');
            $table->string('phone');
            $table->string('phone2');
            $table->string('phone3');
            $table->string('fax');
            $table->string('cellphone');
            $table->string('radio_frecuency');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('website');
            $table->boolean('confirmed');
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
        Schema::drop('directory');
    }
}
