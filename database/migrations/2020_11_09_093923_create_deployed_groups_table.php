<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeployedGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deployed_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_officer_id')->constrained();
            $table->foreignId('constituency_id')->constrained();
            $table->smallInteger('group_no')->nullable()->index();
            $table->enum('party_reserve', ['P','R'])->nullable()->index();
            $table->foreignId('polling_station_id')->constrained();
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
        Schema::dropIfExists('deployed_groups');
    }
}
