<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDutyExemptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duty_exemptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_officer_id')->constrained();
            $table->string('reason');
            $table->foreignId('applied_by')->constrained('users');
            $table->foreignId('processed_by')->constrained('users');
            $table->char('status')->index();
            $table->string('remarks');
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
        Schema::dropIfExists('duty_exemptions');
    }
}
