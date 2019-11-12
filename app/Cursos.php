<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cursos extends Model
{
    use Notifiable;

    protected $table="cursos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo','nomecurso', 'nivel', 'vagas','cargahoraria'
    ];

}
