<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'stok';

    protected $fillable = [
        'id_barang', 'stok',
    ];
}
