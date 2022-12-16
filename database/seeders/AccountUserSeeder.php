<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use App\Models\User;

class AccountUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userAdministrator = User::firstOrCreate([
            'id' => 1,
            'email' => 'admin@gmail.com'
        ],[
            'email' => 'admin@gmail.com',
            'password' => bcrypt("123456789"),
            'name' => 'Admin',
            'email_verified_at' => now(),
        ]);

        $userAdministrator->assignRole(User::ROLE_ADMINISTRATOR);

        $user = User::firstOrCreate([
            'id' => 2,
            'email' => 'user@gmail.com'
        ],[
            'email' => 'user@gmail.com',
            'password' => bcrypt("123456789"),
            'name' => 'User',
            'email_verified_at' => now(),
        ]);

        $user->assignRole(User::ROLE_USER);
    }
}
