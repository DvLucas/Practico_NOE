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
            $table->foreign('id_color_product')->references('id_color_product')->on('colors_products');
            $table->foreign('id_sale_detail')->references('id_sale_detail')->on('sales_details');
        });

        Schema::table('sales_details', function (Blueprint $table) {
            $table->foreign('id_shipping')->references('id_shipping')->on('shipments');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_payment_method')->references('id_payment_method')->on('payments_methods');
            $table->foreign('id_state')->references('id_state')->on('states');
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->foreign('id_product')->references('id_product')->on('products');
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_rol')->references('id_rol')->on('roles');
            $table->foreign('id_cities')->references('id')->on('cities');
        });

        Schema::table('cities', function(Blueprint $table) {
			$table->foreign('province_id')->references('id')->on('provinces')
						->onDelete('restrict')
						->onUpdate('cascade');
        });

        Schema::table('colors_products', function(Blueprint $table) {
            $table->foreign('id_product')->references('id_product')->on('products');
            $table->foreign('id_color')->references('id_color')->on('colors');
        });
        
        Schema::table('products', function(Blueprint $table) {
            $table->foreign('id_category')->references('id_category')->on('categories');
            $table->foreign('id_brand')->references('id_brand')->on('brands');
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
        Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_province_id_foreign');
        });
        
        Schema::table('gallery', function(Blueprint $table) {
			$table->dropForeign('gallery_id_product_foreign');
        });
        
        Schema::table('product_details', function(Blueprint $table) {
            $table->dropForeign('product_details_id_color_product_foreign');
            $table->dropForeign('product_details_id_sale_detail_foreign');
        });

        Schema::table('sales_details', function(Blueprint $table) {
            $table->dropForeign('sales_details_id_shipping_foreign');
            $table->dropForeign('sales_details_id_user_foreign');
            $table->dropForeign('sales_details_id_payment_method_foreign');
            $table->dropForeign('sales_details_id_state_foreign');
        });

        Schema::table('favorites', function(Blueprint $table) {
            $table->dropForeign('favorites_id_product_foreign');
            $table->dropForeign('favorites_id_user_foreign');
        });

        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_id_rol_foreign');
            $table->dropForeign('users_id_cities_foreign');
        });

        Schema::table('colors_products', function(Blueprint $table) {
            $table->dropForeign('colors_products_id_product_foreign');
            $table->dropForeign('colors_products_id_color_foreign');
        });

        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('products_id_category_foreign');
            $table->dropForeign('products_id_brand_foreign');
            $table->dropForeign('products_id_state_foreign');
        });

    }
}
