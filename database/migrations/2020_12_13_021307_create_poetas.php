<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poetas', function (Blueprint $table) {
            $table->increments('poetCode');
            $table->string('firstName',500);
            $table->string('surName', 500);
            $table->string('address', 500);
            $table->integer('postCode');
            $table->bigInteger('telephoneNumber');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('poetas', function (Blueprint $table) {
         #  Schema::dropIfExists('poetas');
        });
    }
}
