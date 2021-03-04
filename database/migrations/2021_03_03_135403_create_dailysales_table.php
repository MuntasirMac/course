<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailysalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailysales', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->integer('order_id')->nullable();
            $table->integer('unit_sold');
            $table->integer('course_id');
            $table->double('revenue');
            $table->foreignId('student_id')->nullable();
            $table->foreignId('course_info_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('dailysales');
    }
}
