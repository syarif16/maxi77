<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
    }
}
