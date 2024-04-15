<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_activites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->integer('heart_rate');
            $table->integer('fever');
            $table->decimal('glucose',2,1);
            $table->integer('upperblood');
            $table->integer('lowerblood');
            $table->decimal('bloodcount',8,3);
            $table->integer('weight');
            $table->string('height');
            $table->string('smoking');
            $table->integer('lungs');
            $table->integer('stomach');
            $table->integer('liver');
            $table->integer('heart');
            $table->integer('brain');
            $table->integer('oxygen');           
            $table->integer('carbon');
            $table->integer('hydrogen');
            $table->integer('nitrogen');
            $table->integer('calcium');
            $table->integer('other');
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
        Schema::dropIfExists('patient_activites');
    }
}
