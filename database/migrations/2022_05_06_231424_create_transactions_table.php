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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('film');
            $table->string('tgl');
            $table->enum('studio', ['Dolby', 'Regular 2D', 'IMAX 2D']);
            $table->string('jam');
            $table->integer('jml_ticket');
            $table->string('no_kursi');
            $table->string('harga');
            $table->string('total2');
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
        Schema::dropIfExists('transactions');
    }
};