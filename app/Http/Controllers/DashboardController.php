<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function indexUser(){
        return view("user.dashboard");
    }

    public function indexAdmin(){
        $today = \Carbon\Carbon::now()->format('Y-m-d');

        $gas_sales = [];
        $bulan_a = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];

        $gas_sales[0]['name'] = 'Gas 3 Kg';
        $gas_sales[1]['name'] = 'Gas 12 Kg';
        $gas_sales[2]['name'] = 'Gas 50 Kg';

        foreach ($bulan_a as $key => $bulan) {
            $order = DB::table('orders')
                ->selectRaw('cast(sum(orders.gas3kg)as UNSIGNED) as y')
                ->where('orders.status', 'A')
                ->whereMonth('orders.tglkirim', $bulan)
                ->whereYear('orders.tglkirim', 2022)
                ->get();

                if (@$order[0]->y != null) {
                    $gas_sales[0]['data'][$key] = $order[0]->y;
                } else {
                    $gas_sales[0]['data'][$key]  = 0;
                }
        }

        foreach ($bulan_a as $key => $bulan) {
            $order = DB::table('orders')
                ->selectRaw('cast(sum(orders.gas12kg)as UNSIGNED) as y')
                ->where('orders.status', 'A')
                ->whereMonth('orders.tglkirim', $bulan)
                ->whereYear('orders.tglkirim', 2022)
                ->get();

                if (@$order[0]->y != null) {
                    $gas_sales[1]['data'][$key] = $order[0]->y;
                } else {
                    $gas_sales[1]['data'][$key]  = 0;
                }
        }

        foreach ($bulan_a as $key => $bulan) {
            $order = DB::table('orders')
                ->selectRaw('cast(sum(orders.gas50kg)as UNSIGNED) as y')
                ->where('orders.status', 'A')
                ->whereMonth('orders.tglkirim', $bulan)
                ->whereYear('orders.tglkirim', 2022)
                ->get();

                if (@$order[0]->y != null) {
                    $gas_sales[2]['data'][$key] = $order[0]->y;
                } else {
                    $gas_sales[2]['data'][$key]  = 0;
                }
        }

        $countCustomer = DB::table('users')
                    ->where('role', 'U')
                    ->count();

        $countOrder = DB::table('orders')
                    ->where('created_at', $today)
                    ->count();


        return view("admin.index",[
            'data_gas_sales' => $gas_sales,
            'count_customer' => $countCustomer,
            'count_order' => $countOrder
        ]);
    }


}
