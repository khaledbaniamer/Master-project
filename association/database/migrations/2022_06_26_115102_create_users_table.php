<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_location');
            $table->string('user_password');
            $table->string('user_image')->nullable();
            $table->string('user_phone');
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                'user_name'=>'telyjiaaaa',
                'user_email'=>'bycoz@mailinator.com',
                'user_location'=>'Ea nostrud tempor qu',
                'user_password'=>'eyJpdiI6IlhmTDFvR2VFYzZ1RGYyS1JkSzl4T3c9PSIsInZhbHVlIjoiSjdyOHBNbkhpc1IvNzVoL2FjeHorMzRyM3hlejM0cnhqbXY0UTNwNEpaQT0iLCJtYWMiOiI4MGY1MGE3YTdkNDY0MmQ4MjFhNjQ5NmJhZTZlOTg2YjU5MzdmNWJiNWRlNjdjMjQ2N2E5NzQwYjU2ZWJhYmFlIiwidGFnIjoiIn0=',
                'user_image'=>NULL,
                'user_phone'=>'0795914133',

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
        Schema::dropIfExists('users');
    }
}
