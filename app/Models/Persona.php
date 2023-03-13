<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tipodocumentos()
    {
        return $this->belongsTo(TipoDocumento::class,'tipo_documento_id');
    }
    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }
    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}
