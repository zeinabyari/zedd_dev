<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{

    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('icon');
            $table->text('link');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('socials');
    }
}
