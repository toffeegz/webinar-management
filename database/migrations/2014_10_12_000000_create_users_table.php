<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->tinyInteger('gender')->comment('ex. 0-male, 1-female')->default(0);
            $table->date('birth_date')->nullable();
            $table->text('address')->nullable();
            $table->unsignedTinyInteger('marital_status')->default(1)->comment('ex. 1-single, 2-married, etc.');
            $table->unsignedTinyInteger('employment_status')->nullable()->comment('ex. 1-employed, 2-student, etc.');
            
            $table->unsignedTinyInteger('highest_educational_attainment')->nullable()->comment('ex. 1 - high school, 2- bachelor, etc.');
            $table->integer('income')->nullable();
            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('users');
    }
}
