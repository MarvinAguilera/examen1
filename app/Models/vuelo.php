<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{
    use HasFactory;
	protected $table = 'Vuelos'; 
	protected $primaryKey = 'numeroVuelo';
	public $timestamp = false; 
}
