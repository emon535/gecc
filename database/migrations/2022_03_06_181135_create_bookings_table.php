<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('qualification')->nullable();
            $table->string('desire_location')->nullable();
            $table->string('course_in_interest')->nullable();
            $table->string('certificate')->nullable();
            $table->text('message')->nullable();
            $table->tinyInteger('booking_type')->default(1)->comment('1: E-Booking, 2: Event Registration, 3: Book for free consultation.');
            $table->string('event_id')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}