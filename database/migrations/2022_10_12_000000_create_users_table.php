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
            $table->string('stripe_id')->nullable();
            $table->string('name');
            $table->string('cpf');
            $table->string('email');
            $table->string('celular')->nullable();
            $table->boolean('active')->default('1');
            $table->boolean('premium')->default('0');
            $table->dateTime('premium_date')->nullable();
            $table->boolean('driver')->default('0')->nullable();
            $table->integer('score')->default('5')->nullable();
            $table->integer('total_proposal')->default('0')->nullable();
            $table->integer('accepted_proposals')->default('0')->nullable();
            $table->string('cnh_url')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->string('cnh_approved')->nullable();
            $table->string('password')->nullable();
            $table->string('code_user')->nullable();
              $table->date('birthdate')->nullable();
            // $table->foreignId('gender_id')->constrained('gender')->nullable();
            // $table->foreignId('geo_state_id')->constrained('geo_state')->nullable();
            // $table->foreignId('permission_id')->constrained('permission')->nullable();
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
};
