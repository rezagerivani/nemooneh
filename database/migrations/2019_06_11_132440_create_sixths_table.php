<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSixthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sixths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('now_city', 15);
            $table->string('now_school', 100);
            $table->string('schoolcode', 15);
            $table->string('nationalcode', 20);
            $table->string('lastname', 100);
            $table->string('name', 100);
            $table->string('fathername', 100);
            $table->string('birthday', 10);
            $table->string('school_sx', 10);
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
        Schema::dropIfExists('sixths');
    }
}
