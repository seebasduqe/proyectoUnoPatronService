<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = 'familias';
    protected $primaryKey = 'codigo';
    public $timestamps = false;
}
