<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vuelo_asiento extends Model
{
    use HasFactory;
    protected $table = 'vuelos_asientos'; 
	protected $primaryKey = 'idTipoAsiento';
	public $timestamp = false; 
}
