<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseToLessonsTable extends Migration
{

    public function up()
    {
        Schema::create('course_to_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('lesson_id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('lesson_id')->references('id')->on('lessons')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }


    public function down()
    {
        Schema::dropIfExists('course_to_lessons');
    }
}
