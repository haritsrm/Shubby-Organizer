<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->category = new CategoryService;
    }

    public function index()
    {
        $categories = $this->category->browse();
        return response()->json($categories);
    }
    public function create(Request $request)
    {
        $category = $this->category;
        $category->create([
            'name' => $request->name,
        ]);
        
        return response()->json('Sukses menambahkan kategori!');
    }
    public function show($id)
    {
        $category = $this->category->find($id);
        return response()->json($category);
    }
    public function update(Request $request, $id)
    { 
        $category = $this->category->find($id);
        
        $category->name = $request->input('name');

        $category->save();        
        return response()->json('Sukses update kategori!');
    }
    public function destroy($id)
    {
        $category = $this->category->find($id);
        $category->delete();
         return response()->json('Sukses hapus barang!');
    }
}