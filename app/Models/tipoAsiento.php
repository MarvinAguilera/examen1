<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoAsiento extends Model
{
    use HasFactory;
	protected $table = 'tipoAsiento'; 
	protected $primaryKey = 'idTipoAsiento ';
	public $timestamp = false; 

}
