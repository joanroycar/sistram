<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function empresa(){
        return $this->hasMany(Empresa::class);
    }

}
