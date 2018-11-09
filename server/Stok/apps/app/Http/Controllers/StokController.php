<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StokController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->stok = new StokService;
    }

    public function index()
    {
        $stoks = $this->stok->browse();
        return response()->json($stoks);
    }
    public function create(Request $request)
    {
        $stok = new $this->stok;
        $stok->create([
            'id_barang' => $request->barang,
            'price' => $request->price,
        ]);
        
        return response()->json('Sukses menambahkan stok barang!');
    }
    public function show($id)
    {
        $stok = $this->stok->find($id);
        return response()->json($stok);
    }
    public function update(Request $request, $id)
    { 
        $stok = $this->stok->find($id);
        
        $stok->id_barang = $request->input('barang');
        $stok->stok = $request->input('stok');

        $barang->save();        
        return response()->json('Sukses update stok barang!');
    }
}
