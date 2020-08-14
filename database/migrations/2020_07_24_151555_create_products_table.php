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
            $table->bigIncrements('id');
            $table->string('name_product',150);
            $table->string('short_description',700);
            $table->longText('feature_image');
            $table->text('information')->nullable();
            $table->bigInteger('price');
            $table->bigInteger('old_price')->default(0);
            $table->bigInteger('id_category');
            $table->bigInteger('quantity')->default(0);
            $table->integer('views')->default(0);
            $table->integer('status')->default(1);
            // $table->timestamps();
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
