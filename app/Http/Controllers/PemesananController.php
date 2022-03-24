<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $selectOrder = Order::all();
        $selectOrder = DB::table('orders')
        ->join('users','users.id','=','users.id')
        ->select(
                'orders.namatoko',
                'users.notelp',
                'orders.gas3kg',
                'orders.gas12kg',
                'orders.gas50kg',
                'orders.tglkirim',
                'users.alamat',
                'orders.pembayaran',
                'orders.status'
                )
        ->get();

            // dd($selectOrder);

        return view('user.histrory',[
            'order' => $selectOrder
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.pemesanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'namatoko' => $request->namatoko,
            'gas3kg' => $request->jumlahgas3kg,
            'gas12kg' => $request->jumlahgas12kg,
            'gas50kg' => $request->jumlahgas50kg,
            'tglkirim' => $request->tglkirim,
            'pembayaran' => $request->pembayaran,
            'status' => 'P',
            'iduser'=> auth()->user()->id

        ];

        $insertData = Order::create($data);

        if($insertData){
            return redirect('user/pemesanan/index')->with('success','Data Berhasil Disimpan');
        }else{
            return redirect('user/pemesanan/store')->with('error','Data Gagal Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
