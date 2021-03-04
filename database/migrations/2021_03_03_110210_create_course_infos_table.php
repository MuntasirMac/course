<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('subtitle');
            $table->double('access');
            $table->double('duration');
            $table->double('original_price');
            $table->double('offer_price');
            $table->integer('no_of_modules');
            $table->integer('no_of_quizzes');
            $table->double('rating');
            $table->integer('regular_or_specialization');
            $table->text('overview');
            $table->text('method_of_assessment');
            $table->text('prerequisite');
            $table->text('career_path');
            $table->text('learning_outcome');
            $table->string('quality');
            $table->string('quality_type');
            $table->boolean('manipulated_or_not');
            $table->foreignId('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreignId('why_choose_id');
            $table->foreign('why_choose_id')->references('id')->on('why_chooses')->onDelete('cascade');
            $table->foreignId('who_course_for_id');
            $table->foreign('who_course_for_id')->references('id')->on('who_course_fors')->onDelete('cascade');
            $table->foreignId('certification_id');
            $table->foreign('certification_id')->references('id')->on('certifications')->onDelete('cascade');
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
        Schema::dropIfExists('course_infos');
    }
}
