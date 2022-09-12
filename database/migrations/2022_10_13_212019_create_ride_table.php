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
        Schema::create('ride', function (Blueprint $table) {
            $table->id();
            $table->string('from_address', 120);
            $table->string('to_address', 120);
            $table->double('init_lat')->nullable();
            $table->double('init_long')->nullable();
            $table->double('final_lat')->nullable();
            $table->double('final_long')->nullable();
            $table->dateTime('run_date');
            $table->integer('price')->nullable();
            $table->integer('driver_id');
            $table->boolean('user_confirmed', 1)->default('0');
            $table->boolean('driver_confirmed', 1)->default('0');
            $table->boolean('driver_payment_completed', 1)->default('0');
            $table->boolean('driver_payment_requested', 1)->default('0');   
            $table->integer('from_state_id');
            $table->integer('to_state_id');
            $table->string('stripe_payment_id', 128);
            $table->boolean('in_transit', 1)->default('0');
            $table->integer('vehicle_id');
            $table->boolean('active', 1)->default('1');
            $table->boolean('is_realtime', 1)->default('1');
            $table->boolean('payment_requested', 1)->default('0');
            $table->boolean('payment_completed', 1)->default('0');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('payment_type_id')->constrained('payment_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ride');
    }
};
