<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcertificateTemplateWebinarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecertificate_template_webinars', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ecertificate_template_id');
            $table->unsignedInteger('webinar_id');
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
        Schema::dropIfExists('ecertificate_template_webinars');
    }
}
