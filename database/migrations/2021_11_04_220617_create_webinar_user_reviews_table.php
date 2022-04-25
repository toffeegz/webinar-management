<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_user_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('webinar_id');
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('rate')->comment('1-lowest 5-highest');
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webinar_user_reviews');
    }
}
