<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSellerProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_seller_products', function (Blueprint $table) {
            $table->id();
            $table->integer('t_seller_id')->references('id')->on('t_sellers');
            $table->integer('t_product_id')->references('id')->on('t_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_seller_products');
    }
}
