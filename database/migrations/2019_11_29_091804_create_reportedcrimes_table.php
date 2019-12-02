<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedcrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportedcrimes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('address');
            $table->integer('phone_no');
            $table->integer('reference_no');
            $table->string('no_plate');
            $table->string('crime_type');
            $table->string('relevant_province');
            $table->string('relevant_police');
            $table->string('evidence');
            $table->string('crime_description');

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
        Schema::dropIfExists('reportedcrimes');
    }
}
