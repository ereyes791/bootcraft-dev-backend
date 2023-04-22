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
        Schema::create('crafts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            //TODO: Add relations
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');;
            $table->uuid('objective_id');
            $table->foreign('objective_id')->references('id')->on('objectives');;
            $table->enum('type', ['code', 'world', 'video']);
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crafts');
    }
};
