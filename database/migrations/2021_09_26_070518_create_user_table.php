<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('department');
            $table->unsignedBigInteger('designation');
            $table->BigInteger('phone_number');
            $table->foreign('department')->references('id')->on('department');
            $table->foreign('designation')->references('id')->on('designation');
            $table->timestamps();
        });

        DB::table('user')->insert([
            ['name' => 'John Due','department'=>'1','designation'=>'1','phone_number'=>'9876543210'],
            ['name' => 'Tommy Mark','department'=>'2','designation'=>'2','phone_number'=>'1123456789'],
            ['name' => 'Devid','department'=>'3','designation'=>'3','phone_number'=>'9876501234'],
            ['name' => 'Hussain','department'=>'3','designation'=>'4','phone_number'=>'9846213999']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
