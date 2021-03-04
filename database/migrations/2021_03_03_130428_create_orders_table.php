<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('details')->nullable();
            $table->integer('quantity');
            $table->double('total_price');
            $table->string('shipping_method');
            $table->string('payment_method');
            $table->boolean('gift_or_not')->nullable();
            $table->text('address');
            $table->string('coupon_code')->nullable();
            $table->foreignId('cart_id');
            $table->foreignId('course_info_id');
            $table->foreign('course_info_id')->references('id')->on('course_infos')->onDelete('cascade');
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
