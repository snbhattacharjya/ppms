<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('district_id')->constrained();
            $table->foreignId('subdivision_id')->constrained();
            $table->foreignId('block_muni_id')->constrained();
            $table->string('address');
            $table->string('pincode', 6);
            $table->string('phone')->nullable();
            $table->smallInteger('capacity');
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
        Schema::dropIfExists('training_venues');
    }
}
