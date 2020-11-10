<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designation_people', function (Blueprint $table) {
            //$table->id();
            //$table->primary(['designation_id', 'people_id']);
            $table->foreignId('designation_id')->constrained();
            $table->foreignId('people_id')->constrained();
            $table->char('ativo', 1)->default('S');
            $table->timestamps();

            //$table->foreign('designation_id')->references('id')->on('designations');
            //$table->foreign('people_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designation_people');
    }
}
