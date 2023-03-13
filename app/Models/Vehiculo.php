<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function personas()
    {
        return $this->belongsTo(Persona::class,'persona_id');
    }
    public function propietario()
    {
        return $this->belongsTo(Persona::class,'dueño_id');
    }


}
