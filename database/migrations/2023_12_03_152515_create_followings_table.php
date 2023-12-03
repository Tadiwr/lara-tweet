<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('followings', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('follower');
            $table->bigInteger('followee');
            $table->foreign('followee')->references('id')->on('users');
            $table->foreign('follower')->references('id')->on('users');
            $table->primary(['follower', 'followee']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followings');
    }
};
