<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Creates the initial admin user for production.
 *
 * Run ONCE after first deploy via Forge's console or SSH:
 *   php artisan db:seed --class=AdminUserSeeder
 *
 * Log in at /admin with these credentials, then change the
 * password immediately via the user profile page.
 */
class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@obct.org')],
            [
                'name'     => 'Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'change-me-now')),
            ]
        );

        $this->command->info('Admin user created. Log in at /admin and change your password immediately.');
    }
}
