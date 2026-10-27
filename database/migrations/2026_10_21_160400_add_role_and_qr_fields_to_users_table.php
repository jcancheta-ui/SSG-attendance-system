<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->after('id')->nullable()->constrained('roles')->onDelete('cascade');
            $table->string('student_id')->after('email')->nullable()->unique();
            $table->string('qr_token')->after('student_id')->nullable()->unique();
            $table->boolean('is_active')->after('qr_token')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn(['role_id', 'student_id', 'qr_token', 'is_active']);
        });
    }
};