<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReedDailysalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reed_dailysales', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->integer('order_id')->nullable();
            $table->integer('unit_sold')->nullable();
            $table->integer('course_id')->nullable();
            $table->double('revenue')->nullable();
            $table->foreignId('student_id');
            $table->foreignId('reed_course_info_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('reed_course_info_id')->references('id')->on('reed_course_infos')->onDelete('cascade');
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
        Schema::dropIfExists('reed_dailysales');
    }
}
