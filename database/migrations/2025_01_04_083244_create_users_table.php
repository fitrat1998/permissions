<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
                $table->string('fullname');
                $table->string('photo')->nullable();
                $table->string('email')->unique()->nullable();
                $table->string('phone')->unique()->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->integer('pin')->nullable();
                $table->string('id_series')->nullable();
                $table->string('country')->nullable();
                $table->string('city')->nullable();
                $table->string('district')->nullable();
                $table->string('verified')->nullable();
            $table->rememberToken();
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
