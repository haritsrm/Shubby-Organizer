<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stok;

class StokService extends Controller
{
    //Service for user

    //User init
    private function newStok()
    {
    	return new Stok; 
    }

    //Get all data user
    public function browse()
    {
    	return $this->newStok()->all(); 
    }

    public function find($id)
    {
    	return $this->newStok()->find($id);
    }

    public function create($req)
    {
    	return $this->newStok()->create($req);
    }
    
    public function save()
    {
    	return $this->newStok()->save();
    }
}
