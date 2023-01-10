<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticulosPorMovimiento extends Model
{
    protected $table = 'articulos_por_movimientos';
    protected $primaryKey = 'codigo';
}
