<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomDetailsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('room_details')) {
            Schema::create('room_details', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('beds');
                $table->integer("vacancies");
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('room_details');
    }
}
