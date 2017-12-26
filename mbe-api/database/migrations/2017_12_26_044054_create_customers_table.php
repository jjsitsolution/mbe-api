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
            $table->string('customer_fname')->default('');
            $table->string('customer_lname')->default('');
            $table->string('customer_mname')->default('');
            $table->string('complete_address')->default('');
            $table->string('billing_address')->default('');
            $table->string('shipping_address')->default('');
            $table->string('customer_email')->default('');
            $table->string('customer_mobile')->default('');
            $table->string('province')->default('');
            $table->string('municipality')->default('');
            $table->string('barangay')->default('');
            $table->string('customer_avatar')->default('');

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
        Schema::dropIfExists('customers');
    }
}
