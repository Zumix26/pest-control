<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('traps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('hardware_id')->unique();
            $table->uuid('gateway_id');
            $table->string('name');
            $table->string('type');
            $table->string('status');
            $table->jsonb('location')->nullable();
            $table->unsignedTinyInteger('battery_level')->default(100);
            $table->unsignedInteger('total_catches')->default(0);
            $table->timestamp('last_event_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('gateway_id')
                ->references('id')
                ->on('gateways')
                ->onDelete('cascade');

            $table->index('hardware_id');
            $table->index('gateway_id');
            $table->index('status');
            $table->index('type');
            $table->index('last_event_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('traps');
    }
};
