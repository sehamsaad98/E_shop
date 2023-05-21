<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductColorSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_color_id')->unsigned();
            $table->integer('product_size_id')->unsigned();
            $table->foreign('product_color_id')->references('id')->on('product_colors');
            $table->foreign('product_size_id')->references('id')->on('product_sizes');
            $table->integer('quantity');
            $table->decimal('second_price', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_color_sizes');
    }
}
