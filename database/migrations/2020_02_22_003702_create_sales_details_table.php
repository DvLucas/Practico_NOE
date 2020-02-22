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
            $table->bigIncrements('id_sale_detail');
            $table->date('created_at');
            $table->integer('quota');
            $table->decimal('descuento', 8,2);
            $table->decimal('total', 10,2);
            $table->Biginteger('id_user'); //id users
            $table->BigInteger('id_shipping');
            $table->BigInteger('id_payment_method');
            $table->BigInteger('id_state');
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
