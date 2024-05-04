<?php

namespace App\Http\Controllers;

// use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Barang;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Barang";
        // $barangs = DB::table('barangs')
        //         ->leftJoin('satuans', 'barangs.kode_satuan', '=', 'satuans.kode_satuan')
        //         ->select('barangs.*', 'satuans.*')
        //         ->get();
        // dd($barangs);
        // $barangs = Barang::all();
        $barangs = Barang::join('satuans', 'barangs.kode_satuan', '=', 'satuans.kode_satuan')
        ->select('barangs.*', 'satuans.kode_satuan','satuans.nama_satuan')
        ->get();

        // dd($users);
        return view('barang.index', [
            'title' => $title,
            'DataBarang'=>$barangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Data Barang";
        $satuans = Satuan::all();
        return view('barang.TambahBarang', [
            'title' => $title,
            'satuans'=>$satuans,
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
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required', 
            'kode_satuan'=>'required',
        ], $messages);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $barang = New Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->kode_satuan = $request->kode_satuan;
        $barang->save();

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Ditambah!']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $ba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Barangss";
        $barang = Barang::join('satuans', 'barangs.kode_satuan', '=', 'satuans.kode_satuan')
        ->select('barangs.*', 'satuans.kode_satuan','satuans.nama_satuan')->where('kode_barang',$id)
        ->get()->first();
        // dd($barang);
        $satuan = Satuan::all();

        return view('barang.EditBarang', [
            'title' => $title,
            'barang'=>$barang,
            'satuan'=>$satuan
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
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required', 
            'kode_satuan'=>'required',
        ], $messages);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Find the Barang instance by its kode_barang
        $barang = Barang::where('kode_barang', $id)->firstOrFail();

         // Mengambil data employee berdasarkan ID
        DB::table('barangs')->where('kode_barang', $id)->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'kode_satuan' => $request->kode_satuan,
        ]);

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diubah!']);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $barang = Barang::where('kode_barang',$id);

        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');

            // Beri respons berhasil
        
        
    }
}
