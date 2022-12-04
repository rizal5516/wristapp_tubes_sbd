<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $datas = DB::select('select * from product');

        return view ('product.index')
            ->with('datas', $datas);
    }

    public function create() {
        return view('product.add');
    }

    public function store(Request $request) {
        $request->validate([
            'id_jam' => 'required',
            'product_name' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'thn_rilis' => 'required',
            'stok' => 'required',
            'id_penjual' => 'required',
        ]);

        DB::insert('INSERT INTO product(id_jam, product_name, merk, harga, thn_rilis, stok, id_penjual) VALUES (null, :product_name, :merk, :harga, :thn_rilis, :stok, :id_penjual)',
        [
            'id_jam' => $request->id_jam,
            'product_name' => $request->product_name,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'thn_rilis' => $request->thn_rilis,
            'stok' => $request->stok,
            'id_penjual' => $request->id_penjual,
        ]
        );

        return redirect()->route('product.index')->with('success', 'Data Product berhasil disimpan');
    }

    public function edit($id) {
        $data = DB::table('product')->where('id_jam', $id)->first();

        return view('product.edit')->with('data', $data);
    }

    public function update($id, Request $request) {
        $request->validate([
            'id_jam' => 'required',
            'product_name' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'thn_rilis' => 'required',
            'stok' => 'required',
            'id_penjual' => 'required',
        ]);

        DB::update('UPDATE product SET id_jam = :id_jam, product_name = :product_name, merk = :merk, harga = :harga, thn_rilis = :thn_rilis, stok = :stok, id_penjual = :id_penjual WHERE id_jam = :id',
        [
            'id' => $id,
            'id_jam' => $request->id_jam,
            'product_name' => $request->product_name,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'thn_rilis' => $request->thn_rilis,
            'stok' => $request->stok,
            'id_penjual' => $request->id_penjual,
        ]
        );

        return redirect()->route('product.index')->with('success'. 'Data Product berhasil diubah');
    }

    public function delete($id) {
        DB::delete('DELETE FROM product WHERE id_jam = :id_jam', ['id_jam' => $id]);

        return redirect()->route('product.index')->with('success', 'Data Product berhasil dihapus');
    }
}
