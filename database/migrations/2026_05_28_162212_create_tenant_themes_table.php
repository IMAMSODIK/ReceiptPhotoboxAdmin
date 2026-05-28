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
        Schema::create('tenant_themes', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('tenant_id')->nullable();
            $table->foreignUuid('theme_id')->nullable();
            $table->dateTime('purchased_at')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_themes');
    }
};
