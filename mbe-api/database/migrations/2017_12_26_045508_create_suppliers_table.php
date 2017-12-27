<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('supplier_id'); //big integer
            $table->string('supplier_name')->default('')->nullable();
            $table->string('supplier_desc')->default('')->nullable();
            $table->string('supplier_email')->default('')->nullable();
            $table->string('supplier_address')->default('')->nullable();
            $table->string('supplier_mobile')->default('')->nullable();
            $table->string('supplier_landline')->default('')->nullable();

            $table->integer('deleted_by')->default(0)->nullable();
            $table->integer('updated_by')->default(0)->nullable();
            $table->integer('created_by')->default(0)->nullable();

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
        Schema::dropIfExists('suppliers');
    }
}
