<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('epic')->unique();
            $table->smallInteger('part_no');
            $table->smallInteger('sl_no');
            $table->foreignId('temp_asm_const_id')->constrained('asm_consts');
            $table->foreignId('perm_asm_const_id')->constrained('asm_consts');
            $table->foreignId('duty_asm_const_id')->constrained('asm_consts');
            $table->foreignId('temp_block_muni_id')->constrained('block_munis');
            $table->foreignId('perm_block_muni_id')->constrained('block_munis');
            $table->foreignId('duty_block_muni_id')->constrained('block_munis');
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
        Schema::dropIfExists('electors');
    }
}
