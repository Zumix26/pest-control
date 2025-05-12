<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('hardware_id')->unique();
            $table->string('api_key', 64)->unique();
            $table->string('name');
            $table->jsonb('location')->nullable();
            $table->string('status');
            $table->timestamp('last_seen_at');
            $table->timestamps();

            $table->index('hardware_id');
            $table->index('api_key');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gateways');
    }
};
