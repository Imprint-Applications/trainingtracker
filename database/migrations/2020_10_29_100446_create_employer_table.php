<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->id();
            $table->string('employer_name');
            $table->text('employer_address')->nullable();
            $table->string('employer_postcode', 6)->nullable();
            $table->string('employer_logo')->nullable();
            $table->string('employer_description')->nullable();
            $table->string('employer_primary_color', 6)->nullable();
            $table->string('employer_secondary_color', 6)->nullable();
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
        Schema::dropIfExists('employer');
    }
}
