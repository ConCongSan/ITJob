<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('img_avatar')->nullable()->default('Avatar.jpg');
            $table->string('position ')->nullable();
            $table->string('description ')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('password')->nullable();
            $table->string('provider')->nullable();
            $table->integer('status')->nullable();
            $table->string('token')->nullable();
            $table->string('role_id')->nullable();//Loại tài khoản
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
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
};
