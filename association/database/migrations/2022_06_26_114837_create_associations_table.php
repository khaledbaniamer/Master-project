<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('assoc_name');
            $table->string('assoc_image');
            $table->string('assoc_location');
            $table->string('assoc_phone');
            $table->string('assoc_description');
            $table->string('assoc_email');
            $table->string('assoc_date');
            $table->unsignedBigInteger('assoc_manager_id');
            $table->foreign('assoc_manager_id')->references('id')->on('managers')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associations');
    }
}
