<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::table('associations')->insert(
            array(
                'assoc_name'=>'Irhaba Charitable Society',
                'assoc_image'=>'storage/association_images/Jh1C4vYszaRKqCW5yiNCrjxKa9EscSYYNrY6KjcV.jpg',
                'assoc_location'=>'Irbed',
                'assoc_phone'=>'0795916825',
                'assoc_description'=>'Irhaba Charitable Society is a association that start  in 1999 by two  persons and grow up to help society in different filed such as health care, educational care, humanitarian aid, development projects',
                'assoc_email'=>'hebaduxin@mailinator.com',
                'assoc_date'=>'19-May-1999',
                'assoc_manager_id'=>1,

            )
            );

        DB::table('associations')->insert(
            array(
                'assoc_name'=>'Charitable Cooperation Association',
                'assoc_image'=>'storage/association_images/Jk4D6CwgsulNmhJ2SRnu3O6HkRKwdtH5MzAVTf6E.jpg',
                'assoc_location'=>'Amman',
                'assoc_phone'=>'0795916828',
                'assoc_description'=>'Charitable Cooperation Association is a association that start  in 2002 by two  persons and grow up to help society in different filed such as health care, educational care, humanitarian aid, development projects',
                'assoc_email'=>'dyvije@mailinator.com',
                'assoc_date'=>'29-Oct-2002',
                'assoc_manager_id'=>2,

            )
            );
        DB::table('associations')->insert(
            array(
                'assoc_name'=>'Zarqa Charitable Society',
                'assoc_image'=>'storage/association_images/MOyVTaVnW36rMdX4635RG29ke3DYQPchWtS7wfnA.jpg',
                'assoc_location'=>'Zaraqa',
                'assoc_phone'=>'0795916857',
                'assoc_description'=>'Charitable Cooperation Association is a association that start  in 2012 by two  persons and grow up to help society in different filed such as health care, educational care, humanitarian aid, development projects',
                'assoc_email'=>'vulazuwiw@mailinator.com',
                'assoc_date'=>'13-Sep-2012',
                'assoc_manager_id'=>3,

            )
            );
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
