<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained();
            $table->string('name');
            $table->string('designation');
            $table->char('gender');
            $table->date('dob');
            $table->string('mobile',10);
            $table->timestamp('mobile_verified_at')->nullable();
            $table->integer('basic_pay');
            $table->foreignId('pay_level_id')->constrained();
            $table->char('group');
            $table->foreignId('qualification_id')->constrained();
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
        Schema::dropIfExists('employees');
    }
}
