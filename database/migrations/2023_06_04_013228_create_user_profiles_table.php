<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('profile_picture')->nullable(); // Add the new column
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('address');
            $table->string('contact_number');
            $table->string('province');
            $table->string('city');
            $table->string('birthday_month');
            $table->unsignedBigInteger('birthday_day');
            $table->unsignedBigInteger('birthday_year');
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
        Schema::dropIfExists('user_profiles');
    }
}
