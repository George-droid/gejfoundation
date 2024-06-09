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
        Schema::table('images', function (Blueprint $table) {
            // Rename the 'path' column to 'image'
            $table->renameColumn('path', 'image');

            // Add 'collection_id' column as a foreign key
            $table->unsignedBigInteger('collection_id');

            // Define foreign key constraint
            $table->foreign('collection_id')
                  ->references('id')
                  ->on('image_collections')
                  ->onDelete('cascade');

            // Remove the 'category' column
            $table->dropColumn('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            // Revert the changes in the 'up' method
            $table->string('category')->nullable();
            $table->dropForeign(['collection_id']);
            $table->dropColumn('collection_id');
            $table->renameColumn('image', 'path');
        });
    }
};
