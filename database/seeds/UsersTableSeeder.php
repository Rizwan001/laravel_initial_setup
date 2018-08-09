<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'admin',
        'password' => bcrypt('admin'),
        'email' => 'admin@laravel.forum.dev',
        'admin' => 1,

          'verified'=>'1'
        ]);

      User::create([
            'name' => 'rizwan',
            'password' => bcrypt('rizwan@localhost.com'),
            'email' => 'rizwan@localhost.com',
            'admin' => 0,

          'verified'=>'1'
        ]);
        User::create([
            'name' => 'zohaib',
            'password' => bcrypt('zohaib@localhost.com'),
            'email' => 'zohaib@localhost.com',
            'admin' => 0,

            'verified'=>'1'
        ]);

        User::create([
            'name' => 'zainab ghafoor',
            'password' => bcrypt('123qwe'),
            'email' => 'user@ddk.com',
            'admin' => 0,
            'verified'=>'1'
        ]);
    }
}
