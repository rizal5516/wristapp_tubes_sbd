<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PembeliController extends Controller
{
    public function index() {
        $datas = DB::select('select * from pembeli');

        return view ('pembeli.index')
            ->with('datas', $datas);
    }

    public function create() {
        return view('pembeli.add');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_pembeli' => 'required',
            'alamat' => 'required',
            'id_jam' => 'required'
        ]);

        DB::insert('INSERT INTO pembeli(id_pembeli, nama_pembeli, alamat, id_jam) VALUES (null, :nama_pembeli, :alamat, :id_jam)',
        [
            'nama_pembeli' => $request->nama_pembeli,
            'alamat' => $request->alamat,
            'id_jam' => $request->id_jam,
        ]
        );

        return redirect()->route('pembeli.index')->with('success', 'Data Pembeli berhasil disimpan');
    }

    public function edit($id) {
        $data = DB::table('pembeli')->where('id_pembeli', $id)->first();

        return view('pembeli.edit')->with('data', $data);
    }

    public function update($id, Request $request) {
        $request->validate([
            'id_pembeli' => 'required',
            'nama_pembeli' => 'required',
            'alamat' => 'required',
            'id_jam' => 'required',
        ]);

        DB::update('UPDATE pembeli SET id_pembeli = :id_pembeli, nama_pembeli = :nama_pembeli, alamat = :alamat, id_jam = :id_jam WHERE id_pembeli = :id',
        [
            'id' => $id,
            'id_pembeli' => $request->id_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat' => $request->alamat,
            'id_jam' => $request->id_jam,
        ]
        );

        return redirect()->route('pembeli.index')->with('success'. 'Data Pembeli berhasil diubah');
    }

    public function delete($id) {
        DB::delete('DELETE FROM pembeli WHERE id_pembeli = :id_pembeli', ['id_pembeli' => $id]);

        return redirect()->route('pembeli.index')->with('success', 'Data Pembeli berhasil dihapus');
    }
}
