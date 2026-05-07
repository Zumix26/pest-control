<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trap_photos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('trap_id')->constrained('traps')->cascadeOnDelete();
            $table->string('file_path');
            $table->unsignedInteger('file_size')->comment('bytes');
            $table->timestamp('captured_at');
            $table->jsonb('ai_result')->nullable()->comment('AI analysis: insect count, species');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trap_photos');
    }
};
