<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has("search")) {
            $datas = DB::select('select pembeli.nama_pembeli, penjual.nama_penjual, product.merk,
            product.harga, product.thn_rilis from transaksi Inner join pembeli ON transaksi.id_pembeli=pembeli.id
            Inner Join kasir ON transaksi.id_kasir=kasir.id Inner Join buku ON transaksi.id_buku=buku.id
            where pembeli.nama = :search;',[
            "search"=>$request->search
            ]);
            return view('transaksi.index')
            ->with('transaksi', $datas);
        }
            else {
                $datas = DB::select('select pembeli.Nama, kasir.NamaKasir, buku.NamaPenerbit,
            buku.Judul, buku.Harga from transaksi Inner join pembeli ON transaksi.id_pembeli=pembeli.id
            Inner Join kasir ON transaksi.id_kasir=kasir.id Inner Join buku ON transaksi.id_buku=buku.id
            ');
            return view('transaksi.index')
            ->with('transaksi', $datas);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
