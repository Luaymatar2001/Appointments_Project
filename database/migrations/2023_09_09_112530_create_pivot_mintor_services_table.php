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
        Schema::create('pivot_mintor_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mintor_id')->constrained('mintors','id')->cascadeOnDelete();
            $table->foreignId('main_service_id')->nullable()->constrained('main_services','id')->nullOnDelete();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_mintor_services');
    }
};
