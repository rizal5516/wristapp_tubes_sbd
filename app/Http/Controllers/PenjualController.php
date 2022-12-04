<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualController extends Controller
{
    public function index() {
        $datas = DB::select('select * from penjual');

        return view ('penjual.index')
            ->with('datas', $datas);
    }

    public function create() {
        return view('penjual.add');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_penjual' => 'required',
            'no_telp' => 'required',
            'email' => 'required'
        ]);

        DB::insert('INSERT INTO penjual(id_penjual, nama_penjual, no_telp, email) VALUES (null, :nama_penjual, :no_telp, :email)',
        [
            'nama_penjual' => $request->nama_penjual,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
        ]
        );

        return redirect()->route('penjual.index')->with('success', 'Data Penjual berhasil disimpan');
    }

    public function edit($id) {
        $data = DB::table('penjual')->where('id_penjual', $id)->first();

        return view('penjual.edit')->with('data', $data);
    }

    public function update($id, Request $request) {
        $request->validate([
            'id_penjual' => 'required',
            'nama_penjual' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ]);

        DB::update('UPDATE penjual SET id_penjual = :id_penjual, nama_penjual = :nama_penjual, no_telp = :no_telp, email = :email WHERE id_penjual = :id',
        [
            'id' => $id,
            'id_penjual' => $request->id_penjual,
            'nama_penjual' => $request->nama_penjual,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
        ]
        );

        return redirect()->route('penjual.index')->with('success'. 'Data Penjual berhasil diubah');
    }

    public function delete($id) {
        DB::delete('DELETE FROM penjual WHERE id_penjual = :id_penjual', ['id_penjual' => $id]);

        return redirect()->route('penjual.index')->with('success', 'Data Penjual berhasil dihapus');
    }
}
