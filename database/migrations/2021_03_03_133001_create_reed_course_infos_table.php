<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReedCourseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reed_course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('subtitle');
            $table->double('original_price');
            $table->double('offer_price');
            $table->double('savings_percent');
            $table->boolean('have_cpd');
            $table->integer('cpd_point')->nullable();
            $table->string('cpd_provider')->nullable();
            $table->boolean('is_regulated');
            $table->boolean('sold_or_enq');
            $table->boolean('is_bundle');
            $table->string('qual_name')->nullable();
            $table->text('broad_category1');
            $table->text('broad_category2')->nullable();
            $table->text('sub_category1')->nullable();
            $table->text('sub_category2')->nullable();
            $table->foreignId('course_info_id');
            $table->foreignId('awarding_body_id');
            $table->foreign('course_info_id')->references('id')->on('course_infos')->onDelete('cascade');
            $table->foreign('awarding_body_id')->references('id')->on('awarding_bodies')->onDelete('cascade');
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
        Schema::dropIfExists('reed_course_infos');
    }
}
