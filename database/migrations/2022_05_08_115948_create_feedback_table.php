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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->enum('reason', ['Question', 'Comment', 'Complaint']);
            $table->string('message');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phonenum');
            $table->enum('rate', ['Excellent', 'Very Good', 'Good', 'Average', 'Poor']);
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
        Schema::dropIfExists('feedback');
    }
};