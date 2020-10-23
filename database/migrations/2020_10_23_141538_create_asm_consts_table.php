<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsmConstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asm_consts', function (Blueprint $table) {
            $table->id();
            $table->string("code", 3)->index();
            $table->string("name", 30);
            $table->foreignId("parl_const_id")->constrained();
            $table->foreignId("district_id")->constrained();
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
        Schema::dropIfExists('asm_consts');
    }
}
