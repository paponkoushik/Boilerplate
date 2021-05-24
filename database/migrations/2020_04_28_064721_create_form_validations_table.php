<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_validations', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('password_input')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('text_area')->nullable();
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
        Schema::dropIfExists('form_validations');
    }
}
