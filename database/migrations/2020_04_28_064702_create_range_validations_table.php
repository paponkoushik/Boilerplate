<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangeValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('range_validations', function (Blueprint $table) {
            $table->id();
            $table->string('min_range')->nullable();
            $table->string('max_range')->nullable();
            $table->string('length')->nullable();
            $table->string('alphanumaric')->nullable();
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
        Schema::dropIfExists('range_validations');
    }
}
