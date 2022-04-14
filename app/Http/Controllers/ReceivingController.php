<?php

namespace App\Http\Controllers;

use App\Models\Receiving;
use Illuminate\Http\Request;
use App\Models\DetailReceiving;
use Illuminate\Support\Facades\DB;

class ReceivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $receivingData = [
            'waktupembelian' => $request->waktu,
            'kodetransaksi' => $request->idtransaksi,
            'sumber' => $request->sumber,
            'totaltransaksi' => $request->grandtotal,
        ];

        // dd($receivingData);

        $insertReceiving = Receiving::create($receivingData);


        $x = count($request->gas);

        for($y=0;$y<$x;$y++){
            $detailReceivingData = [
            'idreceiving' => $insertReceiving->id,
            'jenis' => $request->gas[$y],
            'sumber' => $request->sumber,
            'gas' => $request->gas[$y],
            'qty' => $request->qty[$y],
            'harga' => $request->total[$y],
            ];

            $insertDetailReceiving = DetailReceiving::create($detailReceivingData);
        }

        return redirect()->route('admin.stock.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataTransaksi = DB::table('receiving')
                        ->where('id',$id)
                        ->get();

        $datadetailTransaksi = DB::table('detail_receiving')
                        ->where('idreceiving',$dataTransaksi[0]->id)
                        ->get();

        $xx = count($datadetailTransaksi);

        // for($xy=0;$xy<$xx;$xy++){
        //    $hrg = $datadetailTransaksi[$xy]->harga.',';
        //     $;
        //     //create an array from string w/o space

        //    print_r($spread);
        // }

        return view('admin/produk.show',[
            'dataTransaksi'=>$dataTransaksi,
            'datadetailTransaksi'=>$datadetailTransaksi])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function edit(Receiving $receiving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receiving $receiving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receiving $receiving)
    {
        //
    }
}
