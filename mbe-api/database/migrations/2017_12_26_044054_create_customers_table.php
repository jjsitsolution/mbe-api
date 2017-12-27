<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id'); //big integer
            $table->string('customer_fname')->default('')->nullable();
            $table->string('customer_lname')->default('')->nullable();
            $table->string('customer_mname')->default('')->nullable();
            $table->string('complete_address')->default('')->nullable();
            $table->string('billing_address')->default('')->nullable();
            $table->string('shipping_address')->default('')->nullable();
            $table->string('customer_email')->default('')->nullable();
            $table->string('customer_mobile')->default('')->nullable();
            $table->string('province')->default('')->nullable();
            $table->string('municipality')->default('')->nullable();
            $table->string('barangay')->default('')->nullable();
            $table->string('customer_avatar')->default('')->nullable();

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
        Schema::dropIfExists('customers');
    }
}
