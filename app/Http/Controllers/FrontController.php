<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;


class FrontController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('index', compact('produk'));

    }

    public function about()
    {
        return view('about');
    }
    public function produk()
    {
        $produk = Produk::all();
        return view('produk', compact('produk'));

    }
    public function show()
    {
        return view('show');
    }
}
