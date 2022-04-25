<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionServiceUserWebinarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_service_user_webinar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('extension_service_user_id');
            $table->unsignedBigInteger('webinar_id');
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
        Schema::dropIfExists('extension_service_user_webinar');
    }
}
