<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('prod_name');
            $table->string('prod_description');
            $table->double('prod_price');
            $table->string('prod_image');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('assoc_id');

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('assoc_id')->references('id')->on('associations')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        DB::table('products')->insert(
            array(
                'prod_name'=>'Red shemagh',
                'prod_description'=>'Red shemagh is one of traditional Jordan clothes',
                'prod_price'=>12.5,
                'prod_image'=>'storage/product_images/xZ7qix4sh2Vqf1TCtL8mXjvZgyl19FXk7qSADndD.jpg',
                'category_id'=>2,
                'assoc_id'=>1,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'olives',
                'prod_description'=>'pickled olives made in house with natural materials',
                'prod_price'=>5,
                'prod_image'=>'storage/product_images/agkgJ0MJyLRkW7XViZ39LccLr8II8i3wYEytAouC.jpg',
                'category_id'=>1,
                'assoc_id'=>1,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'straw basket',
                'prod_description'=>'straw basket made from straw as new handcraft using to save and picked things',
                'prod_price'=>7.6,
                'prod_image'=>'storage/product_images/BM0nBn2Gkt2hxux7Sg4NFiQ0CY67xtMSSat7i3Ly.jpg',
                'category_id'=>3,
                'assoc_id'=>1,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'Traditional dress',
                'prod_description'=>'Traditional dress made by hand refers to Jordanian culture',
                'prod_price'=>60,
                'prod_image'=>'storage/product_images/WECkFZUVm7aIJawXFvaGIRSWNeZNNaRyQQZ8cMGf.jpg',
                'category_id'=>2,
                'assoc_id'=>2,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'Olive oil',
                'prod_description'=>'Olive oil useful, healthy and can use with all foods',
                'prod_price'=>7,
                'prod_image'=>'storage/product_images/oFmOcTZzVJJo6fcJkz8dRsMw6tzOkVLxYSuuXJyS.jpg',
                'category_id'=>1,
                'assoc_id'=>2,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'Soap',
                'prod_description'=>'Soap made of 100% natural ingredients that are beneficial for the skin and does not cause any skin allergies',
                'prod_price'=>4,
                'prod_image'=>'storage/product_images/TrTzI2nzt8AWqIW82mOFD0a3RNKNMPbxkLmSSVIf.jpg',
                'category_id'=>3,
                'assoc_id'=>2,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'handcraft',
                'prod_description'=>'handcraft made by straw and wire in different color and shape',
                'prod_price'=>3,
                'prod_image'=>'storage/product_images/iLLbHcFdkSCHOHYH92oXE1TOJihBCvPjtdbAp4kb.jpg',
                'category_id'=>3,
                'assoc_id'=>3,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'Rings handcraft',
                'prod_description'=>'Rings handcraft beautiful shape',
                'prod_price'=>15,
                'prod_image'=>'storage/product_images/01wHfKVRGpbktJtvYcIbjcwbt7uVl2J75khICFsZ.jpg',
                'category_id'=>3,
                'assoc_id'=>3,

            )
            );
        DB::table('products')->insert(
            array(
                'prod_name'=>'Neck wool',
                'prod_description'=>'Neck wool to keep you warm in winter',
                'prod_price'=>4.5,
                'prod_image'=>'storage/product_images/MXCCTjcpSKlqOeo4Vf3zgHrqhRnCzV4LIxMJZMnl.jpg',
                'category_id'=>2,
                'assoc_id'=>3,

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
        Schema::dropIfExists('products');
    }
}
