<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_accounts', function (Blueprint $table) {
            $table->bigIncrements('cus_account_id'); //big integer
            $table->string('cus_user_name')->default('')->nullable();
            $table->string('cus_pword')->default('')->nullable();

            //foreign key for the customer
            $table->bigInteger('customer_id')->unsigned()->default(0)->nullable();
            $table->foreign('customer_id')->references('customer_id')->on('customers');

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
        Schema::dropIfExists('customer_accounts');
    }
}
