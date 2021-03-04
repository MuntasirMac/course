<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingCourseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('subtitle');
            $table->double('original_price');
            $table->double('offer_price');
            $table->double('savings_percent');
            $table->text('category')->nullable();
            $table->foreignId('course_info_id');
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
        Schema::dropIfExists('listing_course_infos');
    }
}
