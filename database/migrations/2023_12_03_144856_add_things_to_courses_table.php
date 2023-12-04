<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThingsToCoursesTable extends Migration
{

    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('meta_desc')->nullable();
            $table->string('code')->nullable();
            $table->string('video_poster')->nullable();
            $table->bigInteger('view')->default(0);

        });
    }


    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
