<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->id('userid');
            $table->string('name');
            $table->string('profile_create_by');
            $table->string('email')->unique();
            $table->boolean('status')->default(0);
            $table->date('brith_date');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('religion');
            $table->string('profession');
            $table->string('married_status');
            $table->string('caste');
            $table->string('language');
            $table->string('height');
            $table->string('country');
            $table->string('sate');
            $table->string('city');
            $table->string('description');
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
        Schema::dropIfExists('user_infos');
    }
};
