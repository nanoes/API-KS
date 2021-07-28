<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public function odontologo(){
        return $this->belongsTo(Odontologo::class, 'odontologos');
    }
    public function tratamiento(){
        return $this->hasMany(Tratamiento::class, 'tratamientos');
    }
}
