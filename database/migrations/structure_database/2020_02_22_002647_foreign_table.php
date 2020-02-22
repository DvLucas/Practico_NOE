<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gallery', function (Blueprint $table) {
            $table->foreign('id_product')->references('id_product')->on('products');
        });

        Schema::table('product_details', function (Blueprint $table) {
            $table->foreign('id_product_color')->references('id_product_color')->on('products_colors');
            $table->foreign('id_sale_detail')->references('id_sale_detail')->on('sales_details');
        });

        Schema::table('sales_details', function (Blueprint $table) {
            $table->foreign('id_shipping')->references('id_shipping')->on('shipping');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_payment_method')->references('id_payment_method')->on('payments_methods');
            $table->foreign('id_state')->references('id_state')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
