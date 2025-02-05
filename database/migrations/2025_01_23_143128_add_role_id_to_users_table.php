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
        Schema::table('users', function (Blueprint $table) {
            // Drop the foreign key constraint if it exists
            $table->dropForeign(['role_id']);

            // Change the column type to unsignedBigInteger and set a default value
            $table->unsignedBigInteger('role_id')->default(2)->change();

            // Re-add the foreign key constraint
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['role_id']);

            // Change the column type back to the original type (adjust as necessary)
            $table->foreignId('role_id')->constrained();
        });
    }
};
