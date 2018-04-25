<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('imgprofil')->default('imgprofil/xMzH90SXt1AQTe6QVB7BugRHTYae6U6JnPKVm2fU.png');
            $table->string('firstname');
            $table->string('slug');
            $table->integer('birthday')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('paypal')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes();
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
