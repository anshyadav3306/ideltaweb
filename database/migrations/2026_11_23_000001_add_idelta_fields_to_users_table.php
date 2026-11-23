<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $t) {
            $t->string('phone', 20)->nullable()->after('email');
            $t->string('role', 20)->default('student')->index()->after('phone');
            $t->string('status', 20)->default('active')->after('role');
            $t->string('avatar_path')->nullable();
        });
    }
    public function down(): void
    {
        Schema::table('users', fn (Blueprint $t) => $t->dropColumn(['phone', 'role', 'status', 'avatar_path']));
    }
};
