<?php
namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        return view('produk.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk              = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga       = $request->harga;
        $produk->deskripsi   = $request->deskripsi;
        $produk->id_jenis    = $request->id_jenis;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/produk', $name);
            $produk->foto = $name;
        }

        $produk->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $jenis  = Jenis::all();
        return view('produk.edit', compact('produk', 'jenis'));
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
        $validated = $request->validate([
            'nama_produk' => 'required',
            'harga'       => 'required|numeric',
            'deskripsi'   => 'required',
            'id_jenis'    => 'required',
            'foto'        => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:1024',
        ]);
        $produk              = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga       = $request->harga;
        $produk->deskripsi   = $request->deskripsi;
        $produk->id_jenis    = $request->id_jenis;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/produk', $name);
            $produk->foto = $name;
        }
        $produk->save();
        session()->flash('success', 'Data berhasil di rubah');
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Dihapus');
    }
}
