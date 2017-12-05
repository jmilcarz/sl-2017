<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
             $table->charset = 'utf8mb4';
             $table->collation = 'utf8mb4_polish_ci';
             $table->increments('brand_id')->unique();
             $table->integer('brand_name');
             $table->text('brand_description');
             $table->string('brand_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
