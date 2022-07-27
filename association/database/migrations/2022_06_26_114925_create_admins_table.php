<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('admin_email');
            $table->string('admin_password');
            $table->string('admin_phone');
            $table->timestamps();
        });

        DB::table('admins')->insert(
            array(
                'admin_name'=>'khaled bani amer',
                'admin_email'=>'khaled@mail.com',
                'admin_password'=>'eyJpdiI6IkRBajZMMXM4WjZHK0FsQjNReUh0Znc9PSIsInZhbHVlIjoiUzRYME5XbllHMTA3dGZ3KzNLM1BMckF1dGREYTBRRUxqcHQ2aGFIcXFtbz0iLCJtYWMiOiI0OWExYWYxMDk4ZmQ2ZjM2ZDUzOWE3M2IxODg4ZDcxYWYyM2E5YTUyYzViMDk4MDNhMzc4ZmNjMGQ3YjgzZjRmIiwidGFnIjoiIn0=',
                'admin_phone'=>'0795914123',

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
        Schema::dropIfExists('admins');
    }
}
