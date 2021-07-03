<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('firstname');
            $table->text('lastname');
            $table->text('username');
            $table->text('phone');
            $table->text('bloodgroup');
            $table->text('gender');
            $table->text('district');
            $table->text('division');
            $table->integer('postcode');
            $table->text('email');
            $table->text('password');
            $table->boolean('verified');
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
        Schema::dropIfExists('users');
    }
}
