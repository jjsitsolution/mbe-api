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
            $table->bigIncrements('product_id'); //big integer
            $table->string('product_code')->default('')->nullable();
            $table->string('product_desc')->default('')->nullable();
            $table->string('product_name')->default('')->nullable();
            $table->decimal('on_hand',20)->default(0)->nullable();

            //foreign key for the categories
            $table->integer('category_id')->unsigned()->default(0)->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories');

            //foreign key for the brands
            $table->integer('brand_id')->unsigned()->default(0)->nullable();
            $table->foreign('brand_id')->references('brand_id')->on('brands');

            //foreign key for the units
            $table->integer('unit_id')->unsigned()->default(0)->nullable();
            $table->foreign('unit_id')->references('unit_id')->on('units');

            $table->integer('deleted_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('created_by')->default(0);

            $table->softDeletes(); //add soft delete column which is deleted at
            $table->timestamps(); //add created_at and updated_at
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
