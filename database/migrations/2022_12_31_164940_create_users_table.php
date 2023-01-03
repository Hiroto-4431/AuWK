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
            $table->id();
            $table->string('name');
            $table->tinyInteger('authentication')->comment('0:未認証; 1:認証済み')->default(0);
            $table->string('icon')->nullable();
            $table->foreignId('university_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('university_email')->nullable();
            $table->string('university_email_verified_at')->nullable();
            $table->date('birthday');
            $table->tinyInteger('gender')->comment('0:回答しない; 1:男性; 2:女性; 9:その他;');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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