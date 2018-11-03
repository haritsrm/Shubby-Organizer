<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryService extends Controller
{
    //Service for user

    //User init
    private function newCategory()
    {
    	return new Category; 
    }

    //Get all data user
    public function browse()
    {
    	return $this->newCategory()->all(); 
    }

    public function find($id)
    {
    	return $this->newCategory()->find($id);
    }

    public function create($req)
    {
    	return $this->newCategory()->create($req);
    }
    
    public function save()
    {
    	return $this->newCategory()->save();
    }
}
