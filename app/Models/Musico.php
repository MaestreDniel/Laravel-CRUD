<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musico extends Model
{
    protected $guarded = [];
    
    public function getRouteKeyName()
    {
        return 'nombre';
    }
    use HasFactory;
}
