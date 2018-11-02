<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangService extends Controller
{
    //Service for user

    //User init
    private function newBarang()
    {
    	return new Barang; 
    }

    //Get all data user
    public function browse()
    {
    	return $this->newBarang()->all(); 
    }

    public function find($id)
    {
    	return $this->newBarang()->find($id);
    }

    public function create($req)
    {
    	return $this->newBarang()->create($req);
    }
    
    public function save()
    {
    	return $this->newBarang()->save();
    }
}
