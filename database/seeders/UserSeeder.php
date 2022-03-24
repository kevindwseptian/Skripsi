<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Kevin',
                'nik' => '319030921',
                'notelp' => '08028409',
                'email' => 'dskevin32@gmail.com',
                'password' => Hash::make('asdasd123'),
                'alamat' => '32132',
                'role' => 'U',
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
