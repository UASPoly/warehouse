<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('category_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('categories')
            ->delete('restrict')
            ->update('cascade');
            $table->string('name');
            $table->text('image')->nullable();
            $table->string('price');
            $table->string('discount')->default(0);
            $table->string('quantity')->default(1);
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
