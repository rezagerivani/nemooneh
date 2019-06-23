<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transaction_id');
            $table->string('registration_code',10);
            $table->string('registration_password',4);
            $table->string('nationalcode',20)->nullable();
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
        Schema::dropIfExists('registration_cards');
    }
}
