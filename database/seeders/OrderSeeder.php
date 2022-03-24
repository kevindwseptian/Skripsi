<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
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
                'namatoko' => 'ankev',
                'gas3kg' => '1',
                'gas12kg' => '1',
                'gas50kg' =>'1',
                'tglkirim' => '2022-03-23',
                'pembayaran' =>'transfer',
                'status' => 'l',
                'iduser' => '1',
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('orders')->insert($data);

    }
}
