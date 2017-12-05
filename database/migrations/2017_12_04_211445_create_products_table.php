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
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_polish_ci';
            $table->increments('product_id')->unique();
            $table->timestamps();
            $table->integer('product_brand_id')->references('brand_id')->on('brands');
            $table->string('product_code', 16)->unique();
            $table->string('product_name', 128);
            $table->string('product_image', 256);
            $table->text('product_description');
            $table->integer('product_price');
            $table->integer('product_quantity');
            $table->integer('product_availability'); 
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
