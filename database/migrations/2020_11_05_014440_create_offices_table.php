<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name');
            $table->string('identifier')->nullable();
            $table->string('hod_designation');
            $table->string('address');
            $table->string('post_office');
            $table->string('pincode',6);
            $table->foreignId('district_id')->constrained();
            $table->foreignId('subdivision_id')->constrained();
            $table->foreignId('block_muni_id')->constrained();
            $table->foreignId('police_station_id')->constrained();
            $table->foreignId('asm_const_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('institute_id')->constrained();
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('hod_mobile', 10);
            $table->timestamp('hod_mobile_verified_at')->nullable();
            $table->smallInteger('total_staff');
            $table->smallInteger('male_staff');
            $table->smallInteger('female_staff');
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
        Schema::dropIfExists('offices');
    }
}
