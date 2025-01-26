<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'idade',
        'empresa_id',
        'cargo',
    ];
}
