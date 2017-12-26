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
            $table->string('supplier_name')->default('');
            $table->string('supplier_desc')->default('');
            $table->string('supplier_email')->default('');
            $table->string('supplier_address')->default('');
            $table->string('supplier_mobile')->default('');
            $table->string('supplier_landline')->default('');

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
        Schema::dropIfExists('suppliers');
    }
}
