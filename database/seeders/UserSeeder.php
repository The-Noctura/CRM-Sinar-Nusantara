<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      [
        'nama' => 'admin',
        'role_id' => '1',
        'username' => 'admin',
        'password' => Hash::make('admin123'),
      ],
      [
        'nama' => 'user',
        'role_id' => '2',
        'username' => 'user',
        'password' => Hash::make('user123'),
      ]
    ]);
  }
}
