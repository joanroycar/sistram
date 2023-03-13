<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paradero extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function zonas()
    {
        return $this->belongsTo(Zona::class,'zona_id');
    }
}
