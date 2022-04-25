<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('link_name')->unique();
            $table->unsignedTinyInteger('department_id');
            $table->string('details')->nullable();
            $table->string('profile_photo_path')->nullable();
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
        Schema::dropIfExists('extension_services');
    }
}
