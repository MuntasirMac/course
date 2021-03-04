<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module_name');
            $table->integer('module_from')->nullable();
            $table->foreignId('course_info_id')->nullable();
            $table->foreignId('quizzes_id');
            $table->foreignId('register_info_id');
            $table->foreign('register_info_id')->references('id')->on('register_infos')->onDelete('cascade');
            $table->foreign('quizzes_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->foreign('course_info_id')->references('id')->on('course_infos')->onDelete('cascade');
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
        Schema::dropIfExists('modules');
    }
}
