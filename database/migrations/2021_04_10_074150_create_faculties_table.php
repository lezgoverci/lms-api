<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->nullable();
            $table->integer('user_id');
            $table->integer('role_id')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('tagline')->nullable();
            $table->string('field')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
}
