<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id_product_detail');
            $table->integer('quantity');
            $table->float('unit_price', 8,2)->nullable($value = true);
            $table->float('subtotal', 8,2)->nullable($value = true);
            $table->integer('id_color_product')->unsigned();
            $table->integer('id_sale_detail')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
