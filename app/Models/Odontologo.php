<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    use HasFactory;
    protected $table= "odontologos";

    protected $fillable = [
        'nombre',
        'apellido',
    ];
    
    public function paciente(){
        return $this->hasMany(Paciente::class, 'pacientes');
    }
    public function tratamiento(){
        return $this->hasMany(Tratamiento::class, 'tratamientos');
    }
}
