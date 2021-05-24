<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSocialLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_social_link', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('social_link_id');
            $table->string('link')->nullable();

            $table->primary(['user_id', 'social_link_id']);

            $table->foreign('user_id')
                ->references('id')
                ->on("users")
                ->onDelete('cascade');

            $table->foreign('social_link_id')
                ->references('id')
                ->on("social_links")
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_social_link');
    }
}
