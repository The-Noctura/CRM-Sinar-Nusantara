<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Illuminate\Support\now;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('roles')->insert([
      [
        'nama_role' => 'administrator',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_role' => 'operator',
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);
  }
}
