<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;
    protected $table= "tratamientos";

    protected $fillable = [
        'nombre',
        'apellido',
    ];
    
    public function paciente(){
        return $this->hasMany(Paciente::class, 'pacientes');
    }
    public function tratamiento(){
        return $this->hasMany(Odontologo::class, 'odontologos');
    }
}
