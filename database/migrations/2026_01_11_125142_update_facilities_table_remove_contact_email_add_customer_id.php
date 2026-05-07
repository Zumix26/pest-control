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
        Schema::table('facilities', function (Blueprint $table) {
            // Drop index first if it exists
            if (Schema::hasColumn('facilities', 'contact_email')) {
                try {
                    $table->dropIndex(['contact_email']);
                } catch (\Exception $e) {
                    // Index doesn't exist, continue
                }
                $table->dropColumn('contact_email');
            }

            // Just add the column, foreign key will be added in a separate migration after customers table is created
            if (!Schema::hasColumn('facilities', 'customer_id')) {
                $table->uuid('customer_id')->nullable()->after('id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('facilities', function (Blueprint $table) {
            if (Schema::hasColumn('facilities', 'customer_id')) {
                $table->dropColumn('customer_id');
            }

            if (!Schema::hasColumn('facilities', 'contact_email')) {
                $table->string('contact_email')->after('contact_phone');
            }
        });
    }
};
