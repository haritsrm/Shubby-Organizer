<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function index(Request $request)
    {
        $barangs = $this->barang->browse();
        return response()->json($barangs);
    }
    public function create(Request $request)
    {
        $barang = new $this->barang;
        $barang->create([
            'name' => $request->name,
            'id_category' => $request->category,
            'price' => $request->price,
            'desc' => $request->description,
        ]);
        
        return response()->json('Sukses menambahkan barang!');
    }
    public function show(Request $request, $id)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://ip.jsontest.com/');
        $barang = $this->barang->find($id);
        $barang->id_category = [
            'data' => $res->getBody(),
        ];
        return response()->json($barang);
    }
    public function update(Request $request, $id)
    { 
        $barang = $this->barang->find($id);
        
        $barang->name = $request->input('name');
        $barang->id_category = $request->input('category');
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