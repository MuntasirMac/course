<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('logged_table');
            $table->string('atrribute');
            $table->integer('instanceId');
            $table->string('reason_to_change');
            $table->string('old_value');
            $table->string('new_value');
            $table->datetime('updated_date');
            $table->foreignId('register_info_id');
            $table->foreign('register_info_id')->references('id')->on('register_infos')->onDelete('cascade');
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
        Schema::dropIfExists('logs');
    }
}
