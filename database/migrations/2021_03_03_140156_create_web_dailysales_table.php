<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebDailysalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_dailysales', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->integer('order_id');
            $table->integer('unit_sold');
            $table->integer('course_id');
            $table->double('revenue');
            $table->foreignId('student_id');
            $table->foreignId('web_course_info_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('web_course_info_id')->references('id')->on('web_course_infos')->onDelete('cascade');
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
        Schema::dropIfExists('web_dailysales');
    }
}
