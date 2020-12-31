<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegister10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register10', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("nick_name")->nullable();
            $table->string("father_name");
            $table->string("area_name")->nullable();
            $table->integer("record_number")->nullable();
            $table->date("date")->nullable();
            $table->string("penalty")->nullable();
            $table->string("station");
            $table->date("entry_date")->nullable();
            $table->string("apo")->nullable();
            $table->string("status")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('register10');
    }
}
