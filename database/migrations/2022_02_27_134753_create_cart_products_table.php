<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_products', function (Blueprint $table) {
            $table->id();
            $table->integer('cart_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('carts')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('product_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('products')
            ->delete('restrict')
            ->update('cascade');
            $table->string('quantity');
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
        Schema::dropIfExists('cart_products');
    }
}
