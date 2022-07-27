<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('manager_name');
            $table->string('manager_email');
            $table->string('manager_password');
            $table->string('manager_phone');
            $table->timestamps();
        });

        DB::table('managers')->insert(
            array(
                'manager_name'=>'Mohammed Ahmad',
                'manager_email'=>'laravelassociation@gmail.com',
                'manager_password'=>'eyJpdiI6IkZ4RDVPNHJpTEI5NmtkRXVwOGpoUVE9PSIsInZhbHVlIjoiMWh1bStXeXlGM0Rlb0MvWUFueUhnTzhzd0pVcjhPN1dtdFJuSUp5MmNvaz0iLCJtYWMiOiJkMDFlMDc0OTVhMzMxZTFiZjhlYmM2MTk2YjY5MTliZjJjZTg5NjZiNDcwNmFiMDI1Zjg3NTBhYjgwOGQyMmM2IiwidGFnIjoiIn0=',
                'manager_phone'=>'0775916882',
     
            )
            );
        DB::table('managers')->insert(
            array(
                'manager_name'=>'Ali Mohammad',
                'manager_email'=>'managerassocc2@gmail.com',
                'manager_password'=>'eyJpdiI6InBDQzY4L2R4T3ZGMVFmT3JiTzE0a0E9PSIsInZhbHVlIjoiZENUOVNtOEFLMkZVUTV1QStyUTZRc1RIRlFKa21kczVQTEFNMUYvNEpBVT0iLCJtYWMiOiIyMGIwNzczY2U2YzI3OGJiNjk3MzQ5NDRjMWIwNWFiZWNhYzlkN2ZjNGM0NGNiZTZmMzhlNzI5MTgwYjgyMTAyIiwidGFnIjoiIn0=',
                'manager_phone'=>'0795916817',

            )
            );
        DB::table('managers')->insert(
            array(
                'manager_name'=>'saleh Maher',
                'manager_email'=>'assocmanager1@gmail.com',
                'manager_password'=>'eyJpdiI6IjFCVWxpMVp6bHI3WEp1cHkrYjRNL3c9PSIsInZhbHVlIjoiR3lXTnpVanlEUkZNczNkNmFvbVY0VTRCbHc0MHhqVWUveDdkcURQVCt1ST0iLCJtYWMiOiI4ZGFlMDc4MjhiNzk1YmJhYjFkOTBlZWVhNWMyOTM2ZWQ3NDA3NjYzZjUyZDJkNDI0MzYyYWE2N2E2MjZlYWFlIiwidGFnIjoiIn0=',
                'manager_phone'=>'0774125896',

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
        Schema::dropIfExists('managers');
    }
}
