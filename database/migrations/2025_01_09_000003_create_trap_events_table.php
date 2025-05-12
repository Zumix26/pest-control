<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trap_events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('trap_id');
            $table->timestamp('caught_at');
            $table->unsignedTinyInteger('battery_level');
            $table->tinyInteger('rssi');
            $table->jsonb('metadata')->nullable();
            $table->timestamp('created_at');

            $table->foreign('trap_id')
                ->references('id')
                ->on('traps')
                ->onDelete('cascade');

            $table->index('trap_id');
            $table->index('caught_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trap_events');
    }
};
