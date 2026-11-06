
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('student_id')->nullable()->unique();
            $table->foreignId('role_id')->nullable()->constrained('roles');
            $table->string('qr_token', 64)->nullable()->unique();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropUnique(['student_id']);
            $table->dropUnique(['qr_token']);
            $table->dropColumn([
                'first_name',
                'middle_name',
                'last_name',
                'student_id',
                'role_id',
                'qr_token',
            ]);
        });
    }
};
