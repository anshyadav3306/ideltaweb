<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(LookupSeeder::class);

        $password = env('ADMIN_PASSWORD');
        if (! $password) {
            $this->command?->warn('ADMIN_PASSWORD is not set in .env, so no admin user was created.');
            return;
        }
        $admin = User::firstOrNew(['email' => env('ADMIN_EMAIL', 'admin@idelta.test')]);
        $admin->forceFill(['name' => 'iDelta Admin', 'role' => 'admin', 'status' => 'active',
            'password' => Hash::make($password), 'email_verified_at' => now()])->save();
    }
}
