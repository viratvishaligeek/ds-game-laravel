<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('wallet_requests') || Schema::hasColumn('wallet_requests', 'processed_by_admin_id')) {
            return;
        }

        Schema::table('wallet_requests', function (Blueprint $table): void {
            $table->foreignId('processed_by_admin_id')
                ->nullable()
                ->after('processed_by')
                ->constrained('admins')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        if (!Schema::hasTable('wallet_requests') || !Schema::hasColumn('wallet_requests', 'processed_by_admin_id')) {
            return;
        }

        Schema::table('wallet_requests', function (Blueprint $table): void {
            $table->dropForeign(['processed_by_admin_id']);
            $table->dropColumn('processed_by_admin_id');
        });
    }
};
