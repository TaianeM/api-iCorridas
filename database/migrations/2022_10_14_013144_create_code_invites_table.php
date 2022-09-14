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
        Schema::create('code_invites', function (Blueprint $table) {
            $table->id();
            $table->string('code_invite')->nullable();
            $table->boolean('sale_invite')->default('0')->nullable();//sale for a new user with token
            $table->boolean('sale_user')->default('0')->nullable();//sale for an user who send a more than 5 invite
            $table->boolean('sale_drive')->default('0')->nullable();//sale for an user who send a more than 5 invite
            $table->foreignId('user_id')->constrained('users')->nullable();
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
        Schema::dropIfExists('code_invites');
    }
};
