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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->string('genre');
            $table->string('rating');
            $table->enum('rating_usia', ['G', 'PG', 'PG-13', 'R', 'D']);
            $table->string('release_date');
            $table->enum('status', ['Populer', 'Now Playing', 'Coming Soon']);
            $table->text('overview');
            $table->string('kode_film');
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
        Schema::dropIfExists('films');
    }
};