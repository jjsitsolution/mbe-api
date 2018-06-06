<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifications', function (Blueprint $table) {
            $table->increments('classification_id');
            $table->string('classification_name')->default('')->nullable();
            $table->string('classification_desc')->default('')->nullable();

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
        Schema::dropIfExists('classifications');
    }
}
