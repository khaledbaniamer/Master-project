<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('category_image');
            $table->timestamps();
        });

        DB::table('categories')->insert(
            array(
                'category_name'=>'Foods',
                'category_image'=>'storage/product_images/gcfLTCYxK3ii0em4xB5AfLQt0gPQPaf4twFNx1lf.jpg',

            )
            );
        DB::table('categories')->insert(
            array(
                'category_name'=>'Clothes',
                'category_image'=>'storage/product_images/GfxooIQLIojmcXuPdQ35CG0hZnS4SuAIt8ifA6oD.jpg',

            )
            );
        DB::table('categories')->insert(
            array(
                'category_name'=>'Handcraft',
                'category_image'=>'storage/product_images/BMtL5r4MPkU5oESq9jkAmv8siIm0HCmDHrAN3Vno.jpg',

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
        Schema::dropIfExists('categories');
    }
}
