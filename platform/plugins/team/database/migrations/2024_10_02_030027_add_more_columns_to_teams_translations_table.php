<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('teams_translations', function (Blueprint $table): void {
            $table->longText('content')->nullable();
            $table->string('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams_translations', function (Blueprint $table): void {
            $table->dropColumn('content');
            $table->dropColumn('address');
        });
    }
};
