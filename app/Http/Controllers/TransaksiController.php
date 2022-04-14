<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectTransaksi = DB::table('orders')
            ->join('users','orders.iduser','=','users.id')
            ->select(
                    'users.name',
                    'orders.tglkirim'
                    )
            ->selectRaw('cast(sum(orders.gas3kg)as UNSIGNED) as totalGas3kg')
            ->selectRaw('cast(sum(orders.gas12kg)as UNSIGNED) as totalGas12kg')
            ->selectRaw('cast(sum(orders.gas50kg)as UNSIGNED) as totalGas50kg')
            ->selectRaw('cast(sum((orders.gas3kg*17000) + (orders.gas12kg*100000) + (orders.gas50kg*700000))as UNSIGNED) as totalPembayaran')
            ->where('orders.status','A')
            ->groupBy('orders.iduser')
            ->get();

            $selectTotalTransaksi = DB::table('orders')
            ->selectRaw('cast(sum((orders.gas3kg*17000) + (orders.gas12kg*100000) + (orders.gas50kg*700000))as UNSIGNED) as totalPembayaran')
            ->where('orders.status','A')
            ->get();

        return view('admin/transaksi.index',[
            'transaksi' => $selectTransaksi,
            'totaltransaksi' => $selectTotalTransaksi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('stock_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
