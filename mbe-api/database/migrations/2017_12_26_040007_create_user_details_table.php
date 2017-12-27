<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('user_detail_id');
            $table->string('user_fname')->default('')->nullable();
            $table->string('user_lname')->default('')->nullable();
            $table->string('user_mname')->default('')->nullable();
            $table->string('user_avatar')->default('')->nullable();

            //foreign key for the user accounts
            $table->integer('user_account_id')->unsigned()->default(0)->nullable();
            $table->foreign('user_account_id')->references('user_account_id')->on('user_accounts');

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
        Schema::dropIfExists('user_details');
    }
}
