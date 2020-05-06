<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->increments('id_sale_detail');
            $table->date('created_at');
            $table->integer('quota')->nullable($value = true);
            $table->decimal('descuento', 8,2)->nullable($value = true);
            $table->decimal('total', 10,2)->nullable($value = true);
            $table->integer('id_user')->unsigned();
            $table->integer('id_shipping')->unsigned();
            $table->integer('id_payment_method')->unsigned();
            $table->integer('id_state')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
