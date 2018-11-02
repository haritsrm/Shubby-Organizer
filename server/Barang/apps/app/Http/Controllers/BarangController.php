<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->barang = new BarangService;
    }

    public function index()
    {
        $barangs = $this->barang->browse();
        return response()->json($barangs);
    }
    public function create(Request $request)
    {
        $barang = new $this->barang;
        $barang->create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->description,
        ]);
        
        return response()->json('Sukses menambahkan barang!');
    }
    public function show($id)
    {
        $barang = $this->barang->find($id);
        return response()->json($barang);
    }
    public function update(Request $request, $id)
    { 
        $barang = $this->barang->find($id);
        
        $barang->name = $request->input('name');
        $barang->price = $request->input('price');
        $barang->desc = $request->input('description');

        $barang->save();        
        return response()->json('Sukses update barang!');
    }
    public function destroy($id)
    {
        $barang = $this->barang->find($id);
        $barang->delete();
         return response()->json('Sukses hapus barang!');
    }
}