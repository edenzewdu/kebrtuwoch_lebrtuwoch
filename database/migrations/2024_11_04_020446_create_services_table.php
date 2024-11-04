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
        Schema::create('our_strongest', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('image');
            $table->string('youtube_link')->nullable(); // Changed for better readability
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
        Schema::dropIfExists('our_strongest'); // Corrected table name here
    }
};
