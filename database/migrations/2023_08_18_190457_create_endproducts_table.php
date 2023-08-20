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
        Schema::create('endproducts', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('version')->default('0');
            $table->string('description');
            $table->text('remarks')->nullable();
            $table->string('status')->default('wip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endproducts');
    }
};
