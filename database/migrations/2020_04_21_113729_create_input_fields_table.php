<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text_input')->nullable();
            $table->string('email_input')->nullable();
            $table->string('password_input')->nullable();
            $table->string('decimal_input')->nullable();
            $table->string('number_input')->nullable();
            $table->string('readonly_input')->nullable();
            $table->string('disabled_input')->nullable();
            $table->longText('textarea')->nullable();
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
        Schema::dropIfExists('input_fields');
    }
}
