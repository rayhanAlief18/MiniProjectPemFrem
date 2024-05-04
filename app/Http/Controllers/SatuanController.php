<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Satuan";
        $satuan = Satuan::all();

        // dd($users);
        return view('satuan.index', [
            'title' => $title,
            'DataSatuan'=>$satuan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Satuan";
        return view('satuan.TambahSatuan', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => 'Isi :sudah digunakan'
        ];

        $validator = Validator::make($request->all(), [
            'kode_satuan' => 'required|unique:satuans',
            'nama_satuan' => 'required',
        ], $messages);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $satuan = New Satuan;
        $satuan->kode_satuan = $request->kode_satuan;
        $satuan->nama_satuan = $request->nama_satuan;
        $satuan->save();

        return redirect()->route('satuan.index')->with(['success' => 'Data Berhasil Ditambah!']);;
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
        $title = "Edit Satuan";
        $satuan = Satuan::select('satuans.*')->where('kode_satuan',$id)
        ->get()->first();

        return view('satuan.EditSatuan', [
            'title' => $title,
            'satuan'=>$satuan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => 'Isi :sudah digunakan'
        ];

        $validator = Validator::make($request->all(), [
            'kode_satuan' => 'required',
            'nama_satuan' => 'required',
        ], $messages);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Find the Barang instance by its kode_barang
        $satuan = Satuan::where('kode_satuan', $id)->firstOrFail();

         // Mengambil data employee berdasarkan ID
        DB::table('satuans')->where('kode_satuan', $id)->update([
            'kode_satuan' => $request->kode_satuan,
            'nama_satuan' => $request->nama_satuan,
        ]);

        // // ELOQUENT
        // $barang = Barang::find('kode_barang',$id);
        // $barang->kode_barang = $request->kode_barang;
        // $barang->nama_barang = $request->nama_barang;
        // $barang->harga_barang = $request->harga_barang;
        // $barang->deskripsi_barang = $request->deskripsi_barang;
        // $barang->kode_satuan = $request->kode_satuan;
        // $barang->save();

        return redirect()->route('satuan.index')->with(['success' => 'Data Berhasil Diubah!']);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $satuan = Satuan::where('kode_satuan',$id);

        $satuan->delete();
        return redirect()->route('satuan.index')->with('success', 'Data berhasil dihapus.');
    }
}
