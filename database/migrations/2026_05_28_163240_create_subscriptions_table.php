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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('tenant_id')->nullable();
            $table->enum('plan', ['bronze', 'silver', 'gold']);
            $table->decimal('price', 15, 2);
            $table->date('started_at');
            $table->date('expired_at');
            $table->enum('status', ['active', 'pending', 'expired', 'suspend'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
