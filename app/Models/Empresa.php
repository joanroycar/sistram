<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function resolucion()
    {
        return $this->belongsTo(Resolucion::class);
    }
    public function resolucionnueva()
    {
        return $this->belongsTo(Resolucion::class,'nueva_resolucion_id');
    }
    public function tipo_organizacion()
    {
        return $this->belongsTo(TipoOrganizacion::class);
    }
    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }
}
