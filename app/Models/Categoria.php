<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //relacion uno a muchos con tarea
    public function tareas() {
        return $this->hasMany(Tarea::class);
    }
}
