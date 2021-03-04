<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_infos', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation')->nullable();
            $table->text('address');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('social_media')->nullable();
            $table->string('email');
            // $table->foreignId('instructor_info_id');
            // $table->foreign('instructor_info_id')->references('id')->on('instructor_infos')->onDelete('cascade');
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
        Schema::dropIfExists('register_infos');
    }
}
