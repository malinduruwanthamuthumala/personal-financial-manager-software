<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product');
            $table->string('brand_name');
            $table->string('unit');
            $table->number('opening_cost');
            $table->number('Retail_price');
            $table->number('wholesale_price');
            $table->string('vendor_name');
            $table->string('vendor_address');
            $table->string('reorder_level');
            $table->date('date');
            $table->number('amount');
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
        Schema::dropIfExists('products');
    }
}
