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

            $table->string('name');
            $table->string('barcode')->nullable();
            $table->decimal('cost',15,2)->default(0,00);
            $table->decimal('price',15,2)->default(0,00);
            $table->integer('stock')->default(0);
            $table->integer('alerts');
            $table->string('image')->nullable();

            $table->unsignedBigInteger('cateory_id');
            $table->foreign('cateory_id')->references('id')->on('categories');

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