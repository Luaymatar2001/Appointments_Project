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
        Schema::create('pivot_institution_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained('institutions','id')->cascadeOnDelete();
            $table->foreignId('tags_id')->nullable()->constrained('tags','id')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_institution_tags');
    }
};
