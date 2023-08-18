<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('for_whom')->nullable();
            $table->text('program')->nullable();
            $table->text('objectif')->nullable();
            $table->text('certificate')->nullable();
            $table->text('key_strengths')->nullable();
            $table->text('financement')->nullable();
            $table->string('prerequisites')->nullable();
            $table->string('duration')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
