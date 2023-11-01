<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->text('avatar')->nullable();
            $table->text('name');
            $table->text('email');
            $table->text('phone')->nullable();
            $table->text('password');
            $table->rememberToken();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
