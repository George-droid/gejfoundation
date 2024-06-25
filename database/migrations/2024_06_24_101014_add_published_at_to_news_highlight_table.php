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
        Schema::table('news_highlights', function (Blueprint $table) {
            $table->dateTime('published_at')
                ->default(now())
                ->index()
                ->comment('Publication date and time of news highlights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_highlights', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
};
