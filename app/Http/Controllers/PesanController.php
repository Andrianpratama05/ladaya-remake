<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Penjualan;
use App\Models\Tiket;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiket = Tiket::get();
        $payment = Bank::get();

        return view('pesan',compact('tiket','payment'));
    }

    public function tampil(){
        $penjualan = Penjualan::latest()->limit(3)->get();
        $tiket = Tiket::latest()->get();
        $payment = Bank::latest()->get();

        return response()->json(['data' => $penjualan,'data2' => $tiket, 'data3' => $payment ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tiket = Tiket::findOrFail($request->tiket_id);
        $invoice = 'TRX-' . time();
        $penjualan = Penjualan::create([
            'nomor' => $invoice,
            'email_pelanggan' => $request->email_pelanggan,
            'nama_pelanggan'=> $request->nama_pelanggan,
            'hp_pelanggan' => $request->hp_pelanggan,
            'tiket_id' => $request->tiket_id,
            'kuantiti' => $request->kuantiti,
            'bank_id'=> $request->bank_id,
            'harga' => $tiket->harga,
            'total' => $tiket->harga * $request->kuantiti
        ]);


        if($penjualan){
            Session::flash('sukses', 'Pembelian tiket berhasil .');
        }else{
            echo"Pemesanan Gagal";
        }

        return redirect()->route('pesan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}