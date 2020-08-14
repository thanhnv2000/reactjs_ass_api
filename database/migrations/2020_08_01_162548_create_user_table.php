<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('username')->unique();
                $table->string('password');
                $table->bigInteger('phone_number');
                $table->longText('avatar');
                $table->string('address',250);
                $table->integer('roles')->default(1);
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
        Schema::dropIfExists('user');
    }
}
