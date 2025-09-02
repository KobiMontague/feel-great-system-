<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure you have an 'is_admin' boolean column on users.
        // See migration note below if you don't.

        $email = 'michael.cronin@feel-great-system.com.au';

        User::updateOrCreate(
            ['email' => $email],
            [
                'name'              => 'Michael Cronin',
                'password'          => Hash::make(env('ADMIN_PASSWORD', 'ChangeMeNow!123')),
                'is_admin'          => true,
                'email_verified_at' => now(), // mark as verified; remove if you don't use verification
            ]
        );
    }
}
